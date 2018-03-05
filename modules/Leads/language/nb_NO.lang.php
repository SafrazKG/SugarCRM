<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'en_us A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Bedriftbeskrivelse',
    'LBL_ACCOUNT_ID'=>'Bedrift-ID',
    'LBL_ACCOUNT_NAME' => 'Bedriftnavn:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Handlinger',
    'LBL_ADD_BUSINESSCARD' => 'Legg til visittkort',
    'LBL_ADDRESS_INFORMATION' => 'Adresseinformasjon',
    'LBL_ALT_ADDRESS_CITY' => 'Alt. adresseby',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt. adresseland',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt. postnummer',
    'LBL_ALT_ADDRESS_STATE' => 'Alt. stat',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt. adresse 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt. adresse 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alt. gateadresse',
    'LBL_ALTERNATE_ADDRESS' => 'Annen adresse:',
    'LBL_ANY_ADDRESS' => 'Vilkårlig adresse:',
    'LBL_ANY_EMAIL' => 'E-postadresse:',
    'LBL_ANY_PHONE' => 'Vilkårlig telefonnummer:',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt bruker:',
    'LBL_BACKTOLEADS' => 'Tilbake til Emner',
    'LBL_BUSINESSCARD' => 'Konverter Emne',
    'LBL_CITY' => 'By:',
    'LBL_CONTACT_ID' => 'Kontakt-ID:',
    'LBL_CONTACT_INFORMATION' => 'Lead-informasjon',
    'LBL_CONTACT_NAME' => 'Emne-navn:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Emne-Mulighet:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Emne:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konverter',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Lagre og konverter',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(valgfri)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Du mangler redigeringstilgang til de modulene som kreves for å konvertere et Emne: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Søker etter duplikater...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ignorer og opprett ny',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Tilbake til duplikater',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Skap ny',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Søk',
    'LBL_CONVERT_DUPLICATES_FOUND' => '{{duplicateCount}} duplikater funnet found',
    'LBL_CONVERT_CREATE_NEW' => 'Ny {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => 'Velg {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => 'Velger {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => 'Opprett {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => 'Oppretter {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => 'Tilbakestill',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'Kopier relaterte aktiviteter til',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'Flytt relaterte aktiviteter til',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'Flytt relaterte aktiviteter til kontaktposten',
    'LBL_CONVERTED_ACCOUNT'=>'Konvertert bedrift:',
    'LBL_CONVERTED_CONTACT' => 'Konvertert kontakt:',
    'LBL_CONVERTED_OPP'=>'Konvertert mulighet:',
    'LBL_CONVERTED'=> 'Konvertert',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konverter Emne',
    'LBL_CONVERTLEAD' => 'Konverter Emne',
    'LBL_CONVERTLEAD_WARNING' => 'Advarsel: Status for Emnet du er i ferd med å konvertere er "konvertert". Kontakt- og/eller Bedrift-poster kan allerede ha blitt opprettet fra Emnet. Hvis du ønsker å fortsette med å konvertere Emnet, klikker du Lagre. For å gå tilbake til Emnet uten å konvertere det, klikker du Avbryt.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mulig Kontakt:',
    'LBL_CONVERTLEAD_ERROR' => 'Kan ikke konvertere emnet',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Du konvertere leadet med hell {{leadName}}, men det var et problem å laste opp vedlegg på en eller flere poster',
    'LBL_CONVERTLEAD_SUCCESS' => 'Du konvertere leadet med hell {{leadName}}',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_NEW' => 'Opprettet en ny',
	'LBL_CREATED_ACCOUNT' => 'Opprettet ny bedrift',
    'LBL_CREATED_CALL' => 'Opprettet ny oppringning',
    'LBL_CREATED_CONTACT' => 'Opprettet ny kontakt',
    'LBL_CREATED_MEETING' => 'Opprettet nytt møte',
    'LBL_CREATED_OPPORTUNITY' => 'Opprettet ny mulighet',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Emner',
    'LBL_DEPARTMENT' => 'Avdeling:',
    'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelseinformasjon',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DO_NOT_CALL' => 'Ikke ring:',
    'LBL_DUPLICATE' => 'Lignende Emner',
    'LBL_EMAIL_ADDRESS' => 'E-postadresse:',
    'LBL_EMAIL_OPT_OUT' => 'Ikke e-post til:',
    'LBL_EXISTING_ACCOUNT' => 'Brukte en eksisterende bedrift',
    'LBL_EXISTING_CONTACT' => 'Brukte en eksisterende kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Brukte en eksisterende mulighet',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_FULL_NAME' => 'Fullt navn:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Historikk',
    'LBL_HOME_PHONE' => 'Hustelefonnummer:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Lead fra vCard er nå opprettet',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Opprett en ny lead automatisk når du importerer et vCard fra filsystemet.',
    'LBL_INVALID_EMAIL'=>'Ugyldig e-post:',
    'LBL_INVITEE' => 'Direkterapporter',
    'LBL_LAST_NAME' => 'Etternavn:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Kildebeskrivelse for lead:',
    'LBL_LEAD_SOURCE' => 'Lead-kilde:',
    'LBL_LIST_ACCEPT_STATUS' => 'Godta status',
    'LBL_LIST_ACCOUNT_NAME' => 'Bedriftnavn:',
    'LBL_LIST_CONTACT_NAME' => 'Lead-navn:',
    'LBL_LIST_CONTACT_ROLE' => 'Rolle',
    'LBL_LIST_DATE_ENTERED' => 'Opprettet dato',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadresse',
    'LBL_LIST_FIRST_NAME' => 'Fornavn',
    'LBL_VIEW_FORM_TITLE' => 'Lead-visning',
    'LBL_LIST_FORM_TITLE' => 'Lead-liste',
    'LBL_LIST_LAST_NAME' => 'Etternavn',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Kildebeskrivelse for lead',
    'LBL_LIST_LEAD_SOURCE' => 'Lead-kilde',
    'LBL_LIST_MY_LEADS' => 'Mine emner',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_PHONE' => 'Telefonnummer til kontor',
    'LBL_LIST_REFERED_BY' => 'Henvist av',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Tittel',
    'LBL_MOBILE_PHONE' => 'Mobiltelefonnummer:',
    'LBL_MODULE_NAME' => 'Emner',
    'LBL_MODULE_NAME_SINGULAR' => 'Lead',
    'LBL_MODULE_TITLE' => 'Emner: Hjem',
    'LBL_NAME' => 'Navn:',
    'LBL_NEW_FORM_TITLE' => 'Ny lead',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nytt portalpassord',
    'LBL_OFFICE_PHONE' => 'Telefonnummer til kontor:',
    'LBL_OPP_NAME' => 'Mulighetsnavn:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Mulighetsmengde:',
    'LBL_OPPORTUNITY_ID'=>'Mulighets-ID:',
    'LBL_OPPORTUNITY_NAME' => 'Mulighetsnavn:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annen e-postadresse:',
    'LBL_OTHER_PHONE' => 'Annet telefonnummer:',
    'LBL_PHONE' => 'Telefonnummer:',
    'LBL_PORTAL_ACTIVE' => 'Aktiv portal:',
    'LBL_PORTAL_APP'=> 'Portalapplikasjon',
    'LBL_PORTAL_INFORMATION' => 'Portalinformasjon',
    'LBL_PORTAL_NAME' => 'Portalnavn:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portalpassordet er satt til:',
    'LBL_POSTAL_CODE' => 'Portalkode:',
    'LBL_STREET' => 'Gate',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Hovedadresse by',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hovedadresse land',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hovedadresse postnummer',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Hovedadresse stat',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Hovedadresse gate 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Hovedadresse gate 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Hovedadresse gate',
    'LBL_PRIMARY_ADDRESS' => 'Hovedadresse:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Du lykkes i å opprette {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>.',
    'LBL_REFERED_BY' => 'Henvist av:',
    'LBL_REPORTS_TO_ID'=>'Rapporterer til ID:',
    'LBL_REPORTS_TO' => 'Rapporterer til',
    'LBL_REPORTS_FROM' => 'Rapporterer Fra:',
    'LBL_SALUTATION' => 'Hilsen',
    'LBL_MODIFIED'=>'Endret av',
	'LBL_MODIFIED_ID'=>'Endret av ID',
	'LBL_CREATED'=>'Opprettet av',
	'LBL_CREATED_ID'=>'Opprettet av ID',
    'LBL_SEARCH_FORM_TITLE' => 'Søk lead',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Velg sjekkede emner',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Velg sjekkede emner',
    'LBL_STATE' => 'Stand:',
    'LBL_STATUS_DESCRIPTION' => 'Statusbeskrivelse:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Tittel:',
    'LBL_UNCONVERTED'=> 'Ukonvertert',
    'LNK_IMPORT_VCARD' => 'Opprett fra vCard',
    'LNK_LEAD_LIST' => 'Emner',
    'LNK_NEW_ACCOUNT' => 'Opprett konto',
    'LNK_NEW_APPOINTMENT' => 'Opprett avtale',
    'LNK_NEW_CONTACT' => 'Opprett kontakt',
    'LNK_NEW_LEAD' => 'Opprett lead',
    'LNK_NEW_NOTE' => 'Opprett notat eller vedlegg',
    'LNK_NEW_TASK' => 'Opprett Oppgave',
    'LNK_NEW_CASE' => 'Opprett Sak',
    'LNK_NEW_CALL' => 'Logg oppringning',
    'LNK_NEW_MEETING' => 'Planlegg møte',
    'LNK_NEW_OPPORTUNITY' => 'Opprett mulighet',
	'LNK_SELECT_ACCOUNTS' => 'ELLER velg Bedrift',
    'LNK_SELECT_CONTACTS' => 'ELLER Velg kontakt',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopier alternativ adresse til hovedadresse',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopier hovedadresse til alternativ adresse',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne oppføringen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'For å opprette en mulighet kreves en bedrift.\n Vennligst opprett en ny bedrift eller velg en som allerede finnes.',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du vil fjerne lead fra denne sak?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Er du sikker på at du vil fjerne denne oppføringen som en direkterapport?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Kampanjer',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Suksessrike kampanjer',
    'LBL_TARGET_BUTTON_LABEL'=>'Målrettet',
    'LBL_TARGET_BUTTON_TITLE'=>'Målrettet',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Kampanje:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',
    'LBL_PROSPECT_LIST' => 'Prospect liste',
    'LBL_PROSPECT' => 'Mål',
    'LBL_CAMPAIGN_LEAD' => 'Kampanjer',
	'LNK_LEAD_REPORTS' => 'Lead-rapporter',
    'LBL_BIRTHDATE' => 'Fødselsdato:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Takk for din innlevering.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Vi beklager, serveren er utilgjengelig for øyeblikket. Vennligst prøv igjen senere.',
    'LBL_ASSISTANT_PHONE' => 'Telefonnummer til assistent',
    'LBL_ASSISTANT' => 'Assistent',
    'LBL_REGISTRATION' => 'Registrering',
    'LBL_MESSAGE' => 'Vennligst fyll inn informasjonen under. Informasjon og/ eller en konto vil bli opprettet for din ventende godkjenning.',
    'LBL_SAVED' => 'Takk for at du registrer deg! Din konto vil bli opprettet og noen vil kontakte deg innen kort tid.',
    'LBL_CLICK_TO_RETURN' => 'Gå tilbake til portal',
    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_MODIFIED_USER' => 'Endret bruker',
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanjer',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Nødvendig',
    'LBL_CONVERT_SELECT' => 'Tillat markering',
    'LBL_CONVERT_COPY' => 'Kopier data',
    'LBL_CONVERT_EDIT' => 'Rediger',
    'LBL_CONVERT_DELETE' => 'Slett',
    'LBL_CONVERT_ADD_MODULE' => 'Legg til Modul',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Rediger konvertert layout',
    'LBL_CREATE' => 'Opprett',
    'LBL_SELECT' => 'ELLER Velg',
	'LBL_WEBSITE' => 'Nettsted',
	'LNK_IMPORT_LEADS' => 'Importer Emner',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Merknad: Dette Konverter Lead oppsettet inneholder egendefinerte felt. Når du for første gang tilpasser Konverter Lead oppsettet i Studio må du legge til egendefinerte felt etter behov. Egendefinerte felt vil ikke vises automatisk i oppsettet slik de ble gjort tidligere.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Modulen til å opprette en ny post i',
	'LBL_REQUIRED_TIP' 	=> 'Nødvendige moduler må opprettes eller velges før Lead kan bli konvertert.',
	'LBL_COPY_TIP'		=> 'Hvis merket, vil feltene fra Lead bli kopiert til felt med samme navn i de nyopprettede postene.',
	'LBL_SELECTION_TIP' => 'Moduler med et tilsvarende felt i Kontakter kan velges i stedet for å opprettes under konverter Lead prosessen.',
	'LBL_EDIT_TIP'		=> 'Endre konverter oppsettet for denne modulen.',
	'LBL_DELETE_TIP'	=> 'Fjern denne modulen fra konverter layout',

    'LBL_ACTIVITIES_MOVE'   => 'Flytt Aktiviteter til',
    'LBL_ACTIVITIES_COPY'   => 'Kopiér Aktiviteter til',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Velg oppføringen som Emnets aktiviteter skal flyttes til. Oppgaver, Samtaler, Møter, Notater og E-poster vil bli flyttet til valgt(e) oppføring(er).",
    'LBL_ACTIVITIES_COPY_HELP'   => "Velg oppføringen som Emnets aktiviteter skal kopieres til. Nye Oppgaver, Samtaler, Møter, Notater og E-poster vil bli opprettet for valgt(e) oppføring(er). E-poster vil bli koblet til valgt(e) oppføring(er).",
    //For export labels
    'LBL_PHONE_HOME' => 'Hjemmetelefon',
    'LBL_PHONE_MOBILE' => 'Mobiltelefon',
    'LBL_PHONE_WORK' => 'Telefon arbeid',
    'LBL_PHONE_OTHER' => 'Annen telefon',
    'LBL_PHONE_FAX' => 'Telefaks',
    'LBL_CAMPAIGN_ID' => 'Kampanje-ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt Brukernavn',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt Bruker-ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Endret av ID',
    'LBL_EXPORT_CREATED_BY' => 'Opprettet Av ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobiltelefon',
    'LBL_EXPORT_EMAIL2'=>'Annen Epostadresse',
	'LBL_EDITLAYOUT' => 'Redigér Oppsett' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Skriv dato' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Laster inn' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Rediger' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B Hoved ID',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Salgsmuligheter',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notater',

    'LBL_HELP_CONVERT_TITLE' => 'Konvertere en {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Den {{plural_module_name}} modul består av individuelle prospekter som kan være interessert i et produkt eller en tjeneste organisasjonen gir. Når {{module_name}} er kvalifisert som et salg {{opportunities_singular_module}}, {{plural_module_name}} kan bli konvertert til {{contacts_module}}, {{opportunities_module}}, og {{accounts_module}}. Det finnes ulike måter du kan opprette {{plural_module_name}} i Sugar eksempel via {{plural_module_name}} modul, duplisering, import {{plural_module_name}}, osv. Når {{module_name}} posten er opprettet, kan du se på og redigere informasjon knyttet til {{module_name}} via {{plural_module_name}} postvisning.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Den {{plural_module_name}} modul består av individuelle prospekter som kan være interessert i et produkt eller en tjeneste organisasjonen tilbyr. - Rediger dette posts felt ved å klikke på et enkelt felt eller Rediger-knappen. - Vis eller endre lenker til andre poster i underpaneler ved veksling av nedre venstre rute til "Data View". - Lag og vis bruker kommentarer og postendringshistorie i {{activitystream_singular_module}} ved veksling av nedre venstre rute til "Aktivitetstrøm". - Følg eller favoritt denne posten ved hjelp av ikonene til høyre for posten navn. - Ytterligere tiltak er tilgjengelig i rullgardinmenyen Handlinger til høyre på Rediger-knappen.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Modulen {{plural_module_name}} består av individuelle prospekter som kan være interessert i et produkt eller en tjeneste organisasjonen tilbyr. Når {{module_name}} er kvalifisert som et salg {{opportunities_singular_module}}, kan den konverteres til en {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}}, eller annen post. 

For å opprette {{module_name}}: 
1. Legg inn verdier i feltene som ønsket. 
- Felt som er merket "Obligatorisk" må oppdateres før du lagrer. 
- Klikk "Vis mer" for å avsløre flere felt hvis det er nødvendig. 
2. Klikk "Lagre" for å sluttføre den nye posten og gå tilbake til forrige side.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar gir deg muligheten til å konvertere {{plural_module_name}} til {{contacts_module}}, {{accounts_module}}, og andre moduler når {{module_name}} oppfyller dine kvalifikasjonskriteriene. Gå gjennom hver modul ved å endre felt, deretter bekrefte den nye postens verdier ved å klikke på hver Associate knappen. Hvis Sugar oppdager en eksisterende post som matcher din {{module_name}}&#39;s informasjon, har du muligheten til å velge et duplikat og bekreft valget med Associate knappen eller til å klikke "Ignorer og skape ny" og fortsette som normalt. Etter å ha bekreftet hver obligatorisk og ønsket modul, klikker du Lagre og konvertere knappen øverst for å fullføre konverteringen.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Synkroniser til Marketo®',
    'LBL_MKTO_ID' => 'Marketo lead-ID',
    'LBL_MKTO_LEAD_SCORE' => 'Lead-resultat',

    'LBL_FILTER_LEADS_REPORTS' => 'Emner-rapporter',
);
