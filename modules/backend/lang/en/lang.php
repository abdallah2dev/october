<?php

return [
    'field' => [
        'invalid_type' => 'Invalid field type used :type.',
        'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the ":field" form field.',
    ],
    'widget' => [
        'not_registered' => "A widget class name ':name' has not been registered",
        'not_bound' => "A widget with class name ':name' has not been bound to the controller",
    ],
    'page' => [
        'untitled' => "Untitled",
    ],
    'partial' => [
        'not_found' => "The partial ':name' is not found.",
    ],
    'account' => [
        'sign_out' => 'Sign out',
        'login' => 'Login',
        'reset' => 'Reset',
        'restore' => 'Restore',
        'login_placeholder' => 'login',
        'password_placeholder' => 'password',
        'forgot_password' => "Forgot your password?",
        'enter_email' => "Enter your email",
        'enter_login' => "Enter your login",
        'email_placeholder' => "email",
        'enter_new_password' => "Enter a new password",
        'password_reset' => "Password Reset",
        'restore_success' => "An email has been sent to your email address with password restore instructions.",
        'restore_error' => "A user could not be found with a login value of ':login'",
        'reset_success' => "Your password has been successfully reset. You may now sign in.",
        'reset_error' => "Invalid password reset data supplied. Please try again!",
        'reset_fail' => "Unable to reset your password!",
        'apply' => 'Apply',
        'cancel' => 'Cancel',
        'delete' => 'Delete',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administrators',
        'list_title' => 'Manage Administrators',
        'new' => 'New Administrator',
        'login' => "Login",
        'first_name' => "First Name",
        'last_name' => "Last Name",
        'full_name' => "Full Name",
        'email' => "Email",
        'groups' => "Groups",
        'groups_comment' => "Specify which groups this person belongs to.",
        'avatar' => "Avatar",
        'password' => "Password",
        'password_confirmation' => "Confirm Password",
        'superuser' => "Super User",
        'superuser_comment' => "Check this box to allow this person to access all areas.",
        'send_invite' => 'Send invitation by email',
        'send_invite_comment' => 'Use this checkbox to send an invitation to the user by email',
        'delete_confirm' => 'Do you really want to delete this administrator?',
        'return' => 'Return to the administrator list',
        'group' => [
            'name' => 'Group',
            'name_field' => 'Name',
            'menu_label' => 'Groups',
            'list_title' => 'Manage Groups',
            'new' => 'New Administrator Group',
            'delete_confirm' => 'Do you really want to delete this administrator group?',
            'return' => 'Return to the group list',
        ],
        'preferences' => [
            'not_authenticated' => 'There is no an authenticated user to load or save preferences for.'
        ]
    ],
    'list' => [
        'default_title' => 'List',
        'search_prompt' => 'Search...',
        'no_records' => 'There are no records in this view.',
        'missing_model' => 'List behavior used in :class does not have a model defined.',
        'missing_column' => 'There are no column definitions for :columns.',
        'missing_columns' => 'List used in :class has no list columns defined.',
        'missing_definition' => "List behavior does not contain a column for ':field'.",
        'behavior_not_ready' => 'List behavior has not been initialized, check that you have called makeLists() in your controller.',
    ],
    'form' => [
        'create_title' => "New :name",
        'update_title' => "Edit :name",
        'preview_title' => "Preview :name",
        'create_success' => 'The :name has been created successfully',
        'update_success' => 'The :name has been updated successfully',
        'delete_success' => 'The :name has been deleted successfully',
        'missing_id' => "Form record ID has not been specified.",
        'missing_model' => 'Form behavior used in :class does not have a model defined.',
        'missing_definition' => "Form behavior does not contain a field for ':field'.",
        'not_found' => 'Form record with an ID of :id could not be found.',
        'create' => 'Create',
        'create_and_close' => 'Create and close',
        'creating' => 'Creating...',
        'save' => 'Save',
        'save_and_close' => 'Save and close',
        'saving' => 'Saving...',
        'delete' => 'Delete',
        'deleting' => 'Deleting...',
        'undefined_tab' => 'Misc',
        'field_off' => 'Off',
        'field_on' => 'On',
        'apply' => 'Apply',
        'cancel' => 'Cancel',
        'close' => 'Close',
        'ok' => 'OK',
        'or' => 'or',
        'confirm_tab_close' => 'Do you really want to close the tab? Unsaved changes will be lost.',
        'behavior_not_ready' => 'Form behavior has not been initialized, check that you have called initForm() in your controller.',
        'preview_no_files_message' => 'Files are not uploaded'
    ],
    'relation' => [
        'missing_definition' => "Relation behavior does not contain a definition for ':field'.",
        'missing_model' => "Relation behavior used in :class does not have a model defined.",
        'invalid_action_single' => "This action cannot be performed on a singular relationship.",
        'invalid_action_multi' => "This action cannot be performed on a multiple relationship.",
        'add' => "Add",
        'add_name' => "Add :name",
        'create' => "Create",
        'create_name' => "Create :name",
        'update' => "Update",
        'update_name' => "Update :name",
        'remove' => "Remove",
        'remove_name' => "Remove :name",
        'delete' => "Delete",
        'delete_name' => "Delete :name",
    ],
    'model' => [
        'name' => "Model",
        'not_found' => "Model ':class' with an ID of :id could not be found",
        'missing_id' => "There is no ID specified for looking up the model record.",
        'missing_relation' => "Model ':class' does not contain a definition for ':relation'.",
        'invalid_class' => "Model :model used in :class is not valid, it must inherit the \Model class.",
    ],
    'warnings' => [
        'tips' => 'System configuration tips',
        'tips_description' => 'There are issues you need to pay attention to in order to configure the system properly.',
        'permissions'  => 'Directory :name or its subdirectories is not writable for PHP. Please set corresponding permissions for the webserver on this directory.',
        'extension' => 'The PHP extension :name is not installed. Please install this library and activate the extension.'
    ],
];
