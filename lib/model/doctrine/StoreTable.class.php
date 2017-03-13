<?php

/*
 * Copyright (c) 2016, webvariants GmbH <?php Co. KG, http://www.webvariants.de
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

/**
 * StoreTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class StoreTable extends Doctrine_Table {

  const PORTAL_NAME = 'portal_name';
  const PORTAL_LOGO = 'portal_logo';
  const PORTAL_META_DESCRIPTION = 'portal_description';
  const PORTAL_META_KEYWORDS = 'portal_keywords';
  const PORTAL_HOME_TITLE = 'portal_home_title';
  const PORTAL_HOME_MARKUP = 'portal_home_markup';
  const BILLING_ENABLE = 'billing_enable';
  const BILLING_CURRENCY = 'billing_currency';
  const BILLING_TAX = 'billing_tax';
  const BILLING_PREFIX = 'billing_prefix';
  const BILLING_PAYINFO = 'billing_payinfo';
  const BILLING_BILL = 'billing_bill';
  const BILLING_BILL_MAIL_SUBJECT = 'billing_bill_mail_subject';
  const BILLING_BILL_MAIL_BODY = 'billing_bill_mail_body';
  const BILLING_OFFER = 'billing_offer';
  const BILLING_PRICING = 'billing_pricing';
  const BILLING_PRICING_MENU = 'billing_pricing_menu';
  const BILLING_PAYPAL_MODE = 'billing_paypal_mode';
  const BILLING_PAYPAL_CLIENT_ID = 'billing_paypal_client_id';
  const BILLING_PAYPAL_SECRET = 'billing_paypal_secret';
  const BILLING_PAYPAL_TRANSACTION_DESCRIPTION = 'billing_paypal_description';
  const BILLING_PAYPAL_PRODUCT_PREFIX = 'billing_paypal_product_prefix';
  const EMAIL_ADDRESS = 'email_address';
  const EMAIL_NAME = 'email_name';
  const EMAIL_SENDER = 'email_sender';
  const EMAIL_FROM_ONLY_VERIFIED = 'email_from_only_verified';
  const EMAIL_VERIFIED = 'email_verified';
  const EMAIL_DELETE_HARD_BOUCNE_IMMEDIATELY = 'email_delete_hard_bounce_immediately';
  const TERMS_TITLE = 'terms_title';
  const TERMS_CONTENT = 'terms_content';
  const TERMS_FOOTER = 'terms_footer';
  const CONTACT_TITLE = 'contact_title';
  const CONTACT_CONTENT = 'contact_content';
  const CONTACT_FOOTER = 'contact_footer';
  const CONTACT_USER = 'contact_user';
  const IMPRINT_TITLE = 'imprint_title';
  const IMPRINT_CONTENT = 'imprint_content';
  const IMPRINT_FOOTER = 'imprint_footer';
  const FOOTER_TITLE = 'footer_title';
  const FOOTER_LINK = 'footer_link';
  const TIPS_TITLE = 'tips_title';
  const TIPS_CONTENT = 'tips_content';
  const TIPS_MENU = 'tips_menu';
  const FAQ_TITLE = 'faq_title';
  const FAQ_CONTENT = 'faq_content';
  const FAQ_MENU = 'faq_menu';
  const HELP_TITLE = 'help_title';
  const HELP_CONTENT = 'help_content';
  const HELP_MENU = 'help_menu';
  const MENU_HOME = 'menu_home';
  const MENU_START = 'menu_start';
  const MENU_LOGIN = 'menu_login';
  const MENU_JOIN = 'menu_join';
  const SIGNING_VALIDATION_EMAIL = 'signing_validation_email';
  const SIGNING_THANK_YOU_EMAIL = 'signing_thank_you_email';
  const ACTION_TELL_YOUR_FRIEND_EMAIL = 'action_tellyourfriend_email';
  const ACTION_PRIVACY_POLICY = 'action_privacy_policy';
  const REGISTER_ON = 'register_on';
  const CAMAPIGN_CREATE_ON = 'campaign_create_on';
  const CAMAPIGN_REGISTER_OWNER = 'campaign_register_owner';
  const REGISTER_MAIL = 'register_mail';
  const PASSWORD_FORGOTTEN_MAIL = 'password_forgotten_mail';
  const EMBED_WIDGET_MAIL = 'embed_widget_mail';
  const NEW_USER_ADMIN_MAIL = 'new_user_admin_mail';
  const PRIVACY_AGREEMENT = 'privacy_agreement';
  const PRIVACY_AGREEMENT_EMAIL = 'privacy_agreement_email';
  const PRIVACY_AGREEMENT_REPLY = 'privacy_agreement_reply';
  const DONATIONS_PAYPAL = 'donations_paypal';
  const INTERNAL_CACHE_OPEN_ACTIONS = 'internal_cache_open_actions';
  const INTERNAL_LAST_TESTING_BOUNCE = 'internal_last_testing_bounce';

  static $meta = array(
      'portal' => array(
          'name' => 'Portal',
          'fields' => array(
              self::PORTAL_NAME => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Name')),
                  'validator' => array('sfValidatorString', array('max_length' => 40)),
              ),
              self::PORTAL_LOGO => array(
                  'widget' => array('WidgetLogo', array('label' => 'Logo')),
                  'validator' => array('ValidatorLogo', array('required' => false)),
                  'file' => true
              ),
              self::PORTAL_META_DESCRIPTION => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Description (Meta)')),
                  'validator' => array('sfValidatorString', array('max_length' => 80, 'required' => false)),
              ),
              self::PORTAL_META_KEYWORDS => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Keywords (Meta)')),
                  'validator' => array('sfValidatorString', array('max_length' => 80, 'required' => false)),
              ),
              self::DONATIONS_PAYPAL => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Enable Donations via Paypal')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::PORTAL_HOME_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Home title')),
                  'validator' => array('sfValidatorString', array('max_length' => 80, 'required' => false)),
              ),
              self::PORTAL_HOME_MARKUP => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Home content'), array('class' => 'markdown')),
                  'validator' => array('sfValidatorString', array('required' => false)),
                  'help' => '#WIDGET-n# (Widget ID), #KEYVISUAL-n# (Action ID)'
              ),
          )
      ),
      'billing' => array(
          'name' => 'Billing',
          'fields' => array(
              self::BILLING_ENABLE => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Enable billing')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::BILLING_CURRENCY => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Currency (ISO)')),
                  'validator' => array('sfValidatorString', array('min_length' => 3, 'max_length' => 3)),
                  'help' => 'EUR, USD'
              ),
              self::BILLING_TAX => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Fallback Tax %')),
                  'validator' => array('sfValidatorNumber', array('min' => 0, 'max' => 99))
              ),
              self::BILLING_PREFIX => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Invoice number prefix')),
                  'validator' => array('sfValidatorString', array('max_length' => 10, 'required' => false))
              ),
              self::BILLING_PAYINFO => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Payment info'), array('class' => 'markdown highlight')),
                  'validator' => array('sfValidatorString', array('required' => false)),
                  'help' => '#PRICE# (Price), #ORDER# (Order-Number)'
              ),
              self::BILLING_BILL => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Invoice template'), array('class' => 'markdown highlight')),
                  'validator' => array('sfValidatorString', array('required' => false)),
                  'help' => '#FIRSTNAME#, #LASTNAME#, #ORGANISATION#, #STREET#, #CITY#, #POSTCODE#, #COUNTRY#, #VAT#, #PRODUCTS#, #PRICE-BRUTTO#, #TAX#, #TAX-NOTE#, #PRICE-NETTO#, #PRICE-TAX#, #ORDER# (Order-Number), #BILL# (Bill-Number), #DATE-ORDER#, #DATE-BILL#'
              ),
              self::BILLING_BILL_MAIL_SUBJECT => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Invoice E-Mail Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('min_length' => 3, 'max_length' => 120)),
              ),
              self::BILLING_BILL_MAIL_BODY => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Invoice E-Mail Body'), array('class' => 'markdown highlight')),
                  'validator' => array('sfValidatorString', array('required' => false)),
                  'help' => '#FIRSTNAME#, #LASTNAME#, #ORGANISATION#, #STREET#, #CITY#, #POSTCODE#, #COUNTRY#, #VAT#, #PRODUCTS#, #PRICE-BRUTTO#, #TAX#, #TAX-NOTE#, #PRICE-NETTO#, #PRICE-TAX#, #ORDER# (Order-Number), #BILL# (Bill-Number), #DATE-ORDER#, #DATE-BILL#'
              ),
              self::BILLING_OFFER => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Offer template'), array('class' => 'markdown highlight')),
                  'validator' => array('sfValidatorString', array('required' => false)),
                  'help' => '#FIRSTNAME#, #LASTNAME#, #ORGANISATION#, #STREET#, #CITY#, #POSTCODE#, #COUNTRY#, #VAT#, #PRODUCTS#, #PRICE-BRUTTO#, #TAX#, #TAX-NOTE#, #PRICE-NETTO#, #PRICE-TAX#, #DATE#'
              ),
              self::BILLING_PRICING => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Pricing page'), array('class' => 'markdown highlight')),
                  'validator' => array('sfValidatorString', array('required' => false)),
                  'help' => '#PRODUCTS#'
              ),
              self::BILLING_PRICING_MENU => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Link in menu')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::BILLING_PAYPAL_MODE => array(
                  'widget' => array('sfWidgetFormChoice', array('label' => 'Paypal mode', 'choices' => array(
                              '' => 'disabled', 'sandbox' => 'sandbox', 'live' => 'live'
                          ))),
                  'validator' => array('sfValidatorChoice', array('required' => false, 'choices' => array('', 'sandbox', 'live')))
              ),
              self::BILLING_PAYPAL_CLIENT_ID => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Paypal client id'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 100)),
                  'help' => 'https://developer.paypal.com/developer/applications'
              ),
              self::BILLING_PAYPAL_SECRET => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Paypal secret'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 100)),
              ),
              self::BILLING_PAYPAL_TRANSACTION_DESCRIPTION => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Paypal transaction description'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 100, 'required' => false)),
                  'help' => 'Free text'
              ),
              self::BILLING_PAYPAL_PRODUCT_PREFIX => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Paypal product name prefix'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 100, 'required' => false, 'trim' => false)),
                  'help' => 'Prefix the product names with this text. Can be empty.'
              ),
          )
      ),
      'contact' => array(
          'name' => 'Contact',
          'fields' => array(
              self::CONTACT_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Title')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::CONTACT_CONTENT => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Content'), array('class' => 'markdown')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::CONTACT_FOOTER => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Link in footer')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::CONTACT_USER => array(
                  'widget' => array('sfWidgetFormDoctrineChoice', array('label' => 'Contact User', 'model' => 'sfGuardUser', 'table_method' => 'queryAdmins', 'add_empty' => 'disable contact form')),
                  'validator' => array('sfValidatorDoctrineChoice', array('model' => 'sfGuardUser', 'required' => false)),
              )
          )
      ),
      'imprint' => array(
          'name' => 'Imprint',
          'fields' => array(
              self::IMPRINT_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Title')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::IMPRINT_CONTENT => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Content'), array('class' => 'markdown')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::IMPRINT_FOOTER => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Link in footer')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'footer' => array(
          'name' => 'Footer',
          'fields' => array(
              self::FOOTER_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Title')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::FOOTER_LINK => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Link')),
                  'validator' => array('sfValidatorString', array('required' => false)),
              )
          )
      ),
      'email' => array(
          'name' => 'Mail-Address',
          'fields' => array(
              self::EMAIL_NAME => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Name')),
                  'validator' => array('sfValidatorString', array()),
//                  'help' => ''
              ),
              self::EMAIL_ADDRESS => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'E-mail')),
                  'validator' => array('ValidatorEmail', array()),
              ),
              self::EMAIL_SENDER => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Use as "Sender" for all E-mails')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::EMAIL_FROM_ONLY_VERIFIED => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Set FROM only for verified addresses')),
                  'validator' => array('sfValidatorBoolean'),
                  'help' => 'When enabled FROM E-mail field is only set if it is in the next list. If it is not verified the E-mail-address is used as Reply-To field.'
              ),
              self::EMAIL_VERIFIED => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Verified E-mail-addresses or domains'), array('rows' => 10)),
                  'validator' => array('ValidatorVerifiedEmails', array('required' => false)),
                  'help' => 'Enter one E-mail-address or domain main per line.'
              ),
              self::EMAIL_DELETE_HARD_BOUCNE_IMMEDIATELY => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Delete hard bounced signings immediately')),
                  'validator' => array('sfValidatorBoolean')
              ),
          )
      ),
      'menu' => array(
          'name' => 'Menu',
          'fields' => array(
              self::MENU_HOME => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Show "Home"')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::MENU_START => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Show "Start an e-action"')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::MENU_LOGIN => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Show "Login"')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'register' => array(
          'name' => 'Registration',
          'fields' => array(
              self::REGISTER_ON => array(
                  'widget' => array('WidgetBoolean', array('label' => 'enabled')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::MENU_JOIN => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Show "Join" in login modal')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'campaign' => array(
          'name' => 'Campaign',
          'fields' => array(
              self::CAMAPIGN_CREATE_ON => array(
                  'widget' => array('WidgetBoolean', array('label' => 'creation enabled')),
                  'validator' => array('sfValidatorBoolean')
              ),
              self::CAMAPIGN_REGISTER_OWNER => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Widget-owners can apply for transfer of data ownership enabled on campaign creation')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'terms' => array(
          'name' => 'Terms of Service',
          'fields' => array(
              self::TERMS_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Title')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::TERMS_CONTENT => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Content'), array('class' => 'markdown')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::TERMS_FOOTER => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Link in footer')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'tips' => array(
          'name' => 'Tips and Guides',
          'fields' => array(
              self::TIPS_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Title')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::TIPS_CONTENT => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Content'), array('class' => 'markdown')),
                  'validator' => array('sfValidatorString', array('required' => false)),
              ),
              self::TIPS_MENU => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Link in menu')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'faq' => array(
          'name' => 'FAQ',
          'fields' => array(
              self::FAQ_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Title')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::FAQ_CONTENT => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Content'), array('class' => 'markdown')),
                  'validator' => array('sfValidatorString', array('required' => false)),
              ),
              self::FAQ_MENU => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Link in menu')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'help' => array(
          'name' => 'Help',
          'fields' => array(
              self::HELP_TITLE => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Title')),
                  'validator' => array('sfValidatorString', array()),
              ),
              self::HELP_CONTENT => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Content'), array('class' => 'markdown')),
                  'validator' => array('sfValidatorString', array('required' => false)),
              ),
              self::HELP_MENU => array(
                  'widget' => array('WidgetBoolean', array('label' => 'Link in menu')),
                  'validator' => array('sfValidatorBoolean')
              )
          )
      ),
      'signing_validation' => array(
          'name' => 'Opt-In Confirmation Email',
          'json' => self::SIGNING_VALIDATION_EMAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'markdown highlight email-template markItUp-higher')),
                  'validator' => array('ValidatorKeywords', array('keywords' => array('#VALIDATION-URL#'))),
                  'help' => '#VALIDATION-URL#, #DISCONFIRMATION-URL#,#REFERER-URL#, #READMORE-URL#, #TITLE#, #TARGET#, #BACKGROUND#, #ACTION-TEXT#, #INTRO#, #FOOTER#, #EMAIL-SUBJECT#, #EMAIL-BODY#, #BODY#, #DATA-OFFICER-NAME#, #DATA-OFFICER-ORGA#, #DATA-OFFICER-EMAIL#, #DATA-OFFICER-WEBSITE#, #DATA-OFFICER-PHONE#, #DATA-OFFICER-MOBILE#, #DATA-OFFICER-STREET#, #DATA-OFFICER-POST-CODE#, #DATA-OFFICER-CITY#, #DATA-OFFICER-COUNTRY#, #DATA-OFFICER-ADDRESS#, #SENDER-NAME#, #SENDER-ADDRESS#, #SENDER-COUNTRY#, #SENDER-EMAIL#, #ACTION-TAKEN-DATE#',
                  'data-markup-set-1' => array(UtilEmailLinks::VALIDATION, UtilEmailLinks::DISCONFIRMATION, UtilEmailLinks::REFERER, UtilEmailLinks::READMORE)
              ),
          )
      ),
      'signing_thankyou' => array(
          'name' => 'Opt-In Thank You Email',
          'json' => self::SIGNING_THANK_YOU_EMAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'markdown highlight email-template markItUp-higher')),
                  'validator' => array('sfValidatorString'),
                  'help' => '#UNSUBSCRIBE-URL#, #REFERER-URL#, #READMORE-URL#, #TITLE#, #TARGET#, #BACKGROUND#, #ACTION-TEXT#, #INTRO#, #FOOTER#, #EMAIL-SUBJECT#, #EMAIL-BODY#, #BODY#, #DATA-OFFICER-NAME#, #DATA-OFFICER-ORGA#, #DATA-OFFICER-EMAIL#, #DATA-OFFICER-WEBSITE#, #DATA-OFFICER-PHONE#, #DATA-OFFICER-MOBILE#, #DATA-OFFICER-STREET#, #DATA-OFFICER-POST-CODE#, #DATA-OFFICER-CITY#, #DATA-OFFICER-COUNTRY#, #DATA-OFFICER-ADDRESS#, #SENDER-NAME#, #SENDER-ADDRESS#, #SENDER-COUNTRY#, #SENDER-EMAIL#, #ACTION-TAKEN-DATE#',
                  'data-markup-set-1' => array(UtilEmailLinks::UNSUBSCRIBE, UtilEmailLinks::REFERER, UtilEmailLinks::READMORE)
              ),
          )
      ),
      'action_terms' => array(
          'name' => 'Default Privacy Policy',
          'json' => self::ACTION_PRIVACY_POLICY,
          'i18n' => true,
          'fields' => array(
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Text'), array('class' => 'markdown highlight')),
                  'validator' => array('sfValidatorString', array()),
                  'help' => '#DATA-OFFICER-NAME#, #DATA-OFFICER-ORGA#, #DATA-OFFICER-EMAIL#, #DATA-OFFICER-WEBSITE#, #DATA-OFFICER-PHONE#, #DATA-OFFICER-MOBILE#, #DATA-OFFICER-STREET#, #DATA-OFFICER-POST-CODE#, #DATA-OFFICER-CITY#, #DATA-OFFICER-COUNTRY#, #DATA-OFFICER-ADDRESS#'
              ),
          )
      ),
      'tell_your_friend' => array(
          'name' => 'Tell-Your-Friend Email',
          'json' => self::ACTION_TELL_YOUR_FRIEND_EMAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'span7 elastic')),
                  'validator' => array('sfValidatorString', array()),
              ),
          )
      ),
      'privacy_agreement' => array(
          'name' => 'Default Privacy Agreement Text',
          'json' => self::PRIVACY_AGREEMENT,
          'fields' => array(
              'text' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Text'), array('class' => 'span7 elastic highlight')),
                  'validator' => array('sfValidatorString', array())
              ),
          )
      ),
      'embed_widget_mail' => array(
          'name' => 'Embed widget verification mail',
          'json' => self::EMBED_WIDGET_MAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'markdown highlight email-template markItUp-higher')),
                  'validator' => array('ValidatorKeywords', array('keywords' => array('#VALIDATION-URL#', '#EDIT-URL#'))),
                  'help' => '#VALIDATION-URL#, #EDIT-URL#',
                  'data-markup-set-1' => array(UtilEmailLinks::VALIDATION, UtilEmailLinks::EDIT)
              ),
          )
      ),
      'new_user_admin_mail' => array(
          'name' => 'New user by admin verification mail',
          'json' => self::NEW_USER_ADMIN_MAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'markdown highlight email-template markItUp-higher')),
                  'validator' => array('ValidatorKeywords', array('keywords' => array('#VALIDATION-URL#'))),
                  'help' => '#VALIDATION-URL#, #USER-NAME#',
                  'data-markup-set-1' => array(UtilEmailLinks::VALIDATION)
              ),
          )
      ),
      'privacy_agreement_email' => array(
          'name' => 'Privacy Agreement Email (for all Campaigns) UNUSED',
          'json' => self::PRIVACY_AGREEMENT_EMAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'span7 elastic')),
                  'validator' => array('sfValidatorString', array())
              ),
          )
      ),
      'privacy_agreement_reply' => array(
          'name' => 'Privacy Agreement E-mail Reply (for all Campaigns) UNUSED',
          'json' => self::PRIVACY_AGREEMENT_REPLY,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'span7 elastic')),
                  'validator' => array('sfValidatorString', array())
              ),
          )
      ),
      'register_mail' => array(
          'name' => 'Register verification mail',
          'json' => self::REGISTER_MAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'markdown highlight email-template markItUp-higher')),
                  'validator' => array('ValidatorKeywords', array('keywords' => '#VALIDATION-URL#')),
                  'help' => '#VALIDATION-URL#, #USER-NAME#',
                  'data-markup-set-1' => array(UtilEmailLinks::VALIDATION)
              ),
          )
      ),
      'forgotten_mail' => array(
          'name' => 'Password forgotten mail',
          'json' => self::PASSWORD_FORGOTTEN_MAIL,
          'i18n' => true,
          'fields' => array(
              'subject' => array(
                  'widget' => array('sfWidgetFormInputText', array('label' => 'Subject'), array('class' => 'span7')),
                  'validator' => array('sfValidatorString', array('max_length' => 120)),
              ),
              'body' => array(
                  'widget' => array('sfWidgetFormTextarea', array('label' => 'Body'), array('class' => 'markdown highlight email-template markItUp-higher')),
                  'validator' => array('ValidatorKeywords', array('keywords' => '#VALIDATION-URL#')),
                  'help' => '#VALIDATION-URL#, #USER-NAME#',
                  'data-markup-set-1' => array(UtilEmailLinks::VALIDATION)
              ),
          )
      ),
  );

  /**
   * Returns an instance of this class.
   *
   * @return StoreTable
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('Store');
  }

  /**
   *
   * @param string $key
   * @param boolean $createMissing
   * @return Store
   */
  public function findByKey($key, $createMissing = false) {
    $one = $this->createQuery('s')->where('s.key = ?', $key)->fetchOne();

    if ($createMissing && !$one) {
      $one = new Store();
      $one->setKey($key);
    }

    return $one;
  }

  /**
   *
   * @param string $key
   * @return Store
   */
  public function findByKeyCached($key) {
    return $this->createQuery('s')->where('s.key = ?', $key)->useResultCache()->fetchOne();
  }

  /**
   *
   * @param string $key
   * @param string $language_id
   * @return Store
   */
  public function findByKeyAndLanguage($key, $language_id) {
    return $this->createQuery('s')->where('s.key = ? and s.language_id = ?', array($key, $language_id))->fetchOne();
  }

  /**
   *
   * @param string $key
   * @param string $language_id
   * @return Store
   */
  public function findByKeyAndLanguageCached($key, $language_id) {
    return $this->createQuery('s')->where('s.key = ? and s.language_id = ?', array($key, $language_id))->useResultCache()->fetchOne();
  }

  /**
   *
   * @param string $key
   * @param string $language_id
   * @param string $fallback
   * @return Store
   */
  public function findByKeyAndLanguageWithFallback($key, $language_id, $fallback = 'en') {
    $store = $language_id ? $this->findByKeyAndLanguage($key, $language_id) : null;
    if ($store)
      return $store;
    if ($language_id != $fallback)
      return $this->findByKeyAndLanguage($key, $fallback);
    return null;
  }

  /**
   *
   * @param string $key
   * @param string $language_id
   * @param string $fallback
   * @return Store
   */
  public function findByKeyAndLanguageWithFallbackCached($key, $language_id, $fallback = 'en') {
    $store = $language_id ? $this->findByKeyAndLanguageCached($key, $language_id) : null;
    if ($store)
      return $store;
    if ($language_id != $fallback)
      return $this->findByKeyAndLanguageCached($key, $fallback);
    return null;
  }

  public function getValueCached($key, $default = null) {
    $store = $this->findByKeyCached($key);
    if ($store)
      return $store->getValue();
    return $default;
  }

  static function value($key, $default = null) {
    return self::getInstance()->getValueCached($key, $default);
  }

  static function version($key, $default = null) {
    $store = self::getInstance()->findByKeyCached($key);

    if ($store)
      return $store->getObjectVersion();
    return $default;
  }

  public static function metaOrdered() {
    $meta = self::$meta;

    uasort($meta, function($page1, $page2) {
      return strcasecmp($page1['name'], $page2['name']);
    });

    return $meta;
  }

}
