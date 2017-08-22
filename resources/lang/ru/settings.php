<?php

return [
    'sidebar_settings' => 'Account settings',
    'sidebar_settings_export' => 'Export data',
    'sidebar_settings_users' => 'Users',
    'sidebar_settings_subscriptions' => 'Subscription',
    'sidebar_settings_import' => 'Import data',
    'sidebar_settings_tags' => 'Tags management',

    'export_title' => 'Export your account data',
    'export_be_patient' => 'Click the button to start the export. It might take several minutes to process the export - please be patient and do not spam the button.',
    'export_title_sql' => 'Export to SQL',
    'export_sql_explanation' => 'Exporting your data in SQL format allows you to take your data and import it to your own Monica instance. This is only valuable if you do have your own server.',
    'export_sql_cta' => 'Export to SQL',
    'export_sql_link_instructions' => 'Note: <a href=":url">read the instructions</a> to learn more about importing this file to your instance.',

    'name_order' => 'Name order',
    'name_order_firstname_first' => 'First name first (John Doe)',
    'name_order_lastname_first' => 'Last name first (Doe John)',
    'currency' => 'Валюта',
    'name' => 'Ваше имя: :name',
    'email' => 'Email',
    'email_placeholder' => 'Введите email',
    'email_help' => 'Этот email используется в качетве логина и на него вы будете получать напоминания.',
    'timezone' => 'Часовой пояс',
    'layout' => 'Дизайн',
    'layout_small' => 'Максимум шириной в 1200 пикселей',
    'layout_big' => 'Шириной во весь экран',
    'save' => 'Обновить настройки',
    'delete_title' => 'Delete your account',
    'delete_desc' => 'Do you wish to delete your account? Warning: deletion is permanent and all your data will be erased permamently.',
    'reset_desc' => 'Do you wish to reset your account? This will remove all your contacts, and the data associated with them. Your account will not be deleted.',
    'reset_title' => 'Reset your account',
    'reset_cta' => 'Reset account',
    'reset_notice' => 'Are you sure to reset your account? There is no turning back.',
    'reset_success' => 'Your account has been reset successfully',
    'delete_notice' => 'Вы уверены что хотите удалить свой аккаунт? Пути назад нет.',
    'delete_cta' => 'Удалить аккаунт',
    'locale' => 'Язык',
    'locale_en' => 'Английский',
    'locale_fr' => 'Французкий',
    'locale_ru' => 'Русский',
    'locale_cz' => 'Чешский',
    'locale_it' => 'итальянский',
    'locale_de' => 'немецкий',

    'users_list_title' => 'Users with access to your account',
    'users_list_add_user' => 'Invite a new user',
    'users_list_you' => 'That\'s you',
    'users_list_invitations_title' => 'Pending invitations',
    'users_list_invitations_explanation' => 'Below are the people you\'ve invited to join Monica as a collaborator.',
    'users_list_invitations_invited_by' => 'invited by :name',
    'users_list_invitations_sent_date' => 'sent on :date',
    'users_blank_title' => 'You are the only one who has access to this account.',
    'users_blank_add_title' => 'Would you like to invite someone else?',
    'users_blank_description' => 'This person will have the same access that you have, and will be able to add, edit or delete contact information.',
    'users_blank_cta' => 'Invite someone',
    'users_add_title' => 'Invite a new user by email to your account',
    'users_add_description' => 'This person will have the same rights as you do, including inviting other users and deleting them (including you). Therefore, make sure you trust this person.',
    'users_add_email_field' => 'Enter the email of the person you want to invite',
    'users_add_confirmation' => 'I confirm that I want to invite this user to my account. This person will access ALL my data and see exactly what I see.',
    'users_add_cta' => 'Invite user by email',
    'users_error_please_confirm' => 'Please confirm that you want to invite this before proceeding with the invitation',
    'users_error_email_already_taken' => 'This email is already taken. Please choose another one',
    'users_error_already_invited' => 'You already have invited this user. Please choose another email address.',
    'users_error_email_not_similar' => 'This is not the email of the person who\'ve invited you.',
    'users_invitation_deleted_confirmation_message' => 'The invitation has been successfully deleted',
    'users_invitations_delete_confirmation' => 'Are you sure you want to delete this invitation?',
    'users_list_delete_confirmation' => 'Are you sure to delete this user from your account?',

    'subscriptions_account_current_plan' => 'Your current plan',
    'subscriptions_account_paid_plan' => 'You are on the :name plan. It costs $:price every month.',
    'subscriptions_account_next_billing' => 'Your subscription will auto-renew on <strong>:date</strong>. You can <a href=":url">cancel subscription</a> anytime.',
    'subscriptions_account_free_plan' => 'You are on the free plan.',
    'subscriptions_account_upgrade' => 'Upgrade your account',
    'subscriptions_account_free_plan_upgrade' => 'You can upgrade your account to the :name plan, which costs $:price per month. Here are the advantages:',
    'subscriptions_account_free_plan_benefits_users' => 'Unlimited number of users',
    'subscriptions_account_free_plan_benefits_contacts' => 'Unlimited number of contacts',
    'subscriptions_account_free_plan_benefits_reminders' => 'Reminders by email',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => 'Import your contacts with vCard',
    'subscriptions_account_free_plan_benefits_support' => 'Support the project on the long run, so we can introduce more great features.',
    'subscriptions_account_invoices' => 'Invoices',
    'subscriptions_account_invoices_download' => 'Download',
    'subscriptions_downgrade_title' => 'Downgrade your account to the free plan',
    'subscriptions_downgrade_limitations' => 'The free plan has limitations. In order to be able to downgrade, you need to pass the checklist below:',
    'subscriptions_downgrade_rule_users' => 'You must have only 1 user in your account',
    'subscriptions_downgrade_rule_users_constraint' => 'You currently have <a href=":url">:count users</a> in your account.',
    'subscriptions_downgrade_rule_invitations' => 'You must not have pending invitations',
    'subscriptions_downgrade_rule_invitations_constraint' => 'You currently have <a href="/settings/users/invitations">:count pending invitations</a> sent to people.',
    'subscriptions_downgrade_cta' => 'Downgrade',
    'subscriptions_upgrade_title' => 'Upgrade your account',
    'subscriptions_upgrade_description' => 'Please enter your card details below. Monica uses <a href="https://stripe.com">Stripe</a> to process your payments securely. No credit card information are stored on our servers.',
    'subscriptions_upgrade_credit' => 'Credit or debit card',
    'subscriptions_upgrade_warning' => 'Your account will be instantly updated. You can upgrade, downgrade, or cancel any time. When you cancel, you will never be charged again. However, you will not be refunded for the current month.',
    'subscriptions_upgrade_cta' => ' Charge my card $:price every month',
    'subscriptions_pdf_title' => 'Your :name monthly subscription',

    'import_title' => 'Import contacts in your account',
    'import_cta' => 'Upload contacts',
    'import_stat' => 'You\'ve imported :number files so far.',
    'import_result_stat' => 'Uploaded vCard with :total_contacts contacts (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => 'View report',
    'import_in_progress' => 'The import is in progress. Reload the page in one minute.',
    'import_upload_title' => 'Import your contacts from a vCard file',
    'import_upload_rules_desc' => 'We do however have some rules:',
    'import_upload_rule_format' => 'We support <code>.vcard</code> and <code>.vcf</code> files.',
    'import_upload_rule_vcard' => 'We support the vCard 3.0 format, which is the default format for Contacts.app (macOS) and Google Contacts.',
    'import_upload_rule_instructions' => 'Export instructions for <a href="http://osxdaily.com/2015/07/14/export-contacts-mac-os-x/" target="_blank">Contacts.app (macOS)</a> and <a href="http://www.akruto.com/backup-phone-contacts-calendar/how-to-export-google-contacts-to-csv-or-vcard/" target="_blank">Google Contacts</a>.',
    'import_upload_rule_multiple' => 'For now, if your contacts have multiple email addresses or phone numbers, only the first entry will be picked up.',
    'import_upload_rule_limit' => 'Files are limited to 10MB.',
    'import_upload_rule_time' => 'It might take up to 1 minute to upload the contacts and process them. Be patient.',
    'import_upload_rule_cant_revert' => 'Make sure data is accurate before uploading, as you can\'t undo the upload.',
    'import_upload_form_file' => 'Your <code>.vcf</code> or <code>.vCard</code> file:',
    'import_report_title' => 'Importing report',
    'import_report_date' => 'Date of the import',
    'import_report_type' => 'Type of import',
    'import_report_number_contacts' => 'Number of contacts in the file',
    'import_report_number_contacts_imported' => 'Number of imported contacts',
    'import_report_number_contacts_skipped' => 'Number of skipped contacts',
    'import_report_status_imported' => 'Imported',
    'import_report_status_skipped' => 'Skipped',
    'import_vcard_contact_exist' => 'Contact already exists',
    'import_vcard_contact_no_firstname' => 'No firstname (mandatory)',
    'import_blank_title' => 'You haven\'t imported any contacts yet.',
    'import_blank_question' => 'Would you like to import contacts now?',
    'import_blank_description' => 'We can import vCard files that you can get from Google Contacts or your Contact manager.',
    'import_blank_cta' => 'Import vCard',

    'tags_list_title' => 'Tags',
    'tags_list_description' => 'You can organize your contacts by setting up tags. Tags work like folders, but you can add more than one tag to a contact.',
    'tags_list_contact_number' => ':count contacts',
    'tags_list_delete_success' => 'The tag has been successfully with success',
    'tags_list_delete_confirmation' => 'Are you sure you want to delete the tag? No contacts will be deleted, only the tag.',
    'tags_blank_title' => 'Tags are a great way of categorizing your contacts.',
    'tags_blank_description' => 'Tags work like folders, but you can add more than one tag to a contact. Go to a contact and tag a friend, right below the name. Once a contact is tagged, go back here to manage all the tags in your account.',
];
