<?php
/*
 * Copyright (c) 2016, webvariants GmbH <?php Co. KG, http://www.webvariants.de
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

class SigningsDownloadForm extends policatFilterForm {

  const OPTION_QUERY = 'query';
  const OPTION_SUBSCRIBER = 'subscriber';
  const OPTION_FAST_VALIDATE = 'fast_validate';
  const OPTION_VERIFIED = 'verified';

  public function configure() {
    $query = $this->getOption(self::OPTION_QUERY);
    /* @var $query Doctrine_Query */

    $lang_query = LanguageTable::getInstance()
      ->createQuery('l')
      ->orderBy('l.order_number ASC');
    if (!$this->getOption(self::OPTION_FAST_VALIDATE, false)) {
      $lang_query->whereIn('l.id', (array) $query->copy()->select('ps.language_id')->groupby('ps.language_id')->execute(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR));
    }

    $this->setWidget('l', new sfWidgetFormDoctrineChoice(
      array(
        'model' => 'Language',
        'add_empty' => ' Language',
        'query' => $lang_query,
        'label' => false
      ), array('class' => 'span2')
    ));
    $this->setValidator('l', new sfValidatorDoctrineChoice(array(
        'required' => false,
        'model' => 'Language',
        'query' => $lang_query
    )));

    if (!$this->getOption(self::OPTION_FAST_VALIDATE, false)) {
      $countries = $query->copy()->orderBy('ps.country')->select('DISTINCT ps.country')->execute(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);
      if (is_string($countries)) {
        $countries = array($countries);
      }

      $countries = array_filter($countries);
    } else {
      $countries = array();
    }

    $this->setWidget('c', new sfWidgetFormI18nChoiceCountry(
      array(
        'countries' => $countries,
        'add_empty' => ' Country',
        'label' => false
      ), array('class' => 'span2')
    ));
    if (!$this->getOption(self::OPTION_FAST_VALIDATE, false)) {
      $this->setValidator('c', new sfValidatorChoice(array(
        'choices' => $countries,
        'required' => false
      )));
    } else {
      $this->setValidator('c', new sfValidatorString(array('min_length' => 2, 'max_length' => 2, 'required' => false)));
    }

    $campaign = $this->getOption(PetitionSigningTable::CAMPAIGN);
    if ($campaign && !$this->getOption(PetitionSigningTable::PETITION)) {
      $petitions = PetitionTable::getInstance()->queryByCampaign($campaign)->execute();
      $petition_choices = array('' => '');
      foreach ($petitions as $petition_i) {
        /* @var $petition_i Petition */
        $petition_choices[$petition_i->getId()] = $petition_i->getName();
      }

      $this->setWidget('p', new sfWidgetFormChoice(array(
          'choices' => $petition_choices,
          'label' => false
        ), array(
          'class' => 'span2',
          'data-placeholder' => 'Action'
      )));

      $this->setValidator('p', new sfValidatorChoice(array(
          'choices' => array_keys($petition_choices),
          'required' => false
      )));
    }

    $petition = $this->getOption(PetitionSigningTable::PETITION);
    if ($petition) {
      $widget_filter = PetitionSigningTable::getInstance()->getWidgetFilter($petition);
      $this->setWidget('w', new sfWidgetFormChoice(array(
          'choices' => $widget_filter,
          'label' => false
        ), array(
          'class' => 'span2',
          'data-placeholder' => 'Widget'
      )));

      $this->setValidator('w', new sfValidatorChoice(array(
          'required' => false,
          'choices' => array_merge(array_keys($widget_filter['Users']), array_keys($widget_filter['Organisations']), array_keys($widget_filter['Widgets']))
      )));
    }

    if ($this->getOption(self::OPTION_VERIFIED)) {
      $verified_with_all = PetitionSigning::$VERIFIED_SHOW + array('all' => 'All');
      $this->setWidget('v', new sfWidgetFormChoice(array(
        'choices' => $verified_with_all,
        'label' => false
      ), array(
        'class' => 'span2'
      )));

      $this->setValidator('v', new sfValidatorChoice(array(
        'choices' => array_keys($verified_with_all),
        'required' => false
      )));

      $this->setDefault('v', 1);

      $subscribe_with_all = PetitionSigning::$SUBSCRIBE_SHOW + array('all' => 'All');
      $this->setWidget('su', new sfWidgetFormChoice(array(
        'choices' => $subscribe_with_all,
        'label' => false
      ), array(
        'class' => 'span2'
      )));

      $this->setValidator('su', new sfValidatorChoice(array(
        'choices' => array_keys($subscribe_with_all),
        'required' => false
      )));

      $this->setDefault('v', 1);
    }

    $this->setWidget('s', new sfWidgetFormInputText(array(
        'label' => false
      ), array(
        'type' => 'search',
        'placeholder' => 'Search',
        'class' => 'span2',
        'style' => 'vertical-align:top',
        'title' => 'Enter a part of, or the full name, e-mail-address, or other data. If you don\'t get a search result, check different spellings and accents'
    )));
    $this->setValidator('s', new sfValidatorString(array(
        'required' => false
    )));
  }

  public function getQueryOptions() {
    $options = array(
        PetitionSigningTable::SUBSCRIBER => $this->getOption(self::OPTION_SUBSCRIBER),
        PetitionSigningTable::LANGUAGE => $this->getValue('l'),
        PetitionSigningTable::COUNTRY => $this->getValue('c'),
        PetitionSigningTable::SEARCH => $this->getValue('s'),
        PetitionSigningTable::WIDGET_FILTER => $this->getValue('w')
    );

    if ($this->getValue('p')) {
      $options[PetitionSigningTable::PETITION] = $this->getValue('p');
    }

    if ($this->getOption(self::OPTION_VERIFIED) && $this->getValue('v') !== NULL) {
      $options[PetitionSigningTable::VERIFIED] = $this->getValue('v');
    }

    if ($this->getOption(self::OPTION_VERIFIED) && $this->getValue('su') !== NULL) {
      $options[PetitionSigningTable::SUBSCRIBE] = $this->getValue('su');
    }

    return $options;
  }

  public function getMergedQueryOptions() {
    $options = array();
    if ($this->getOption(PetitionSigningTable::CAMPAIGN))
      $options[PetitionSigningTable::CAMPAIGN] = $this->getOption(PetitionSigningTable::CAMPAIGN);

    if ($this->getOption(PetitionSigningTable::PETITION)) {
      $options[PetitionSigningTable::PETITION] = $this->getOption(PetitionSigningTable::PETITION);
    }

    if ($this->getOption(PetitionSigningTable::WIDGET)) {
      $options[PetitionSigningTable::WIDGET] = $this->getOption(PetitionSigningTable::WIDGET);
      $options[PetitionSigningTable::USER] = $this->getOption(PetitionSigningTable::USER);
      if (!$this->getOption(PetitionSigningTable::USER))
        throw new Exception('user required');
    }

    if ($this->getOption(PetitionSigningTable::ORDER)) {
      $options[PetitionSigningTable::ORDER] = $this->getOption(PetitionSigningTable::ORDER);
    }

    $options = array_merge($options, $this->getQueryOptions());
    return $options;
  }

  public function filter(Doctrine_Query $query) {
//    Doctrine_Core::dump($this->getMergedQueryOptions());
//    Doctrine_Core::dump(PetitionSigningTable::getInstance()->query($this->getMergedQueryOptions())->getDql());
//    die;
    return PetitionSigningTable::getInstance()->query($this->getMergedQueryOptions());
  }

  public function getCount() {
    return PetitionSigningTable::getInstance()->query($this->getMergedQueryOptions())->count();
  }

  public function getPending() {
    return PetitionSigningTable::getInstance()
        ->query(array_merge($this->getMergedQueryOptions(), array(PetitionSigningTable::STATUS => PetitionSigning::STATUS_PENDING)))
        ->count();
  }

  protected function getDefaultValues()
  {
    if ($this->getOption(self::OPTION_VERIFIED)) {
      return array('v' => 1, 'su' => 1);
    }

    return parent::getDefaultValues();
  }

}
