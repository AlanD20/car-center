<?php

return [
    'title' => 'Car Automotive Center',
    'nav' => [
        'home' => 'Home',
        'service' => 'service',
        'team' => 'team',
        'partners' => 'partners',
        'about' => 'about',
        'contact' => 'contact',
    ],
    'home' => [
        'title' => 'Car Center',
        'description' => 'automotive service',
        'more' => 'read more about us',
    ],
    'services' => [
        'title' => 'services',
        'description' => 'Our Services Include',
    ],
    'team' => [
        'title' => 'OUR TEAMS',
    ],
    'partners' => [
        'title' => 'OUR PARTNERS',
    ],
    'about' => [
        'title' => 'ABOUT US',
    ],
    'contact' => [
        'title' => 'CONTACT US',
        'description' => 'Send us a message by filling the form below',
        'ph' => [
            'name' => 'Your Name *',
            'email' => 'Your Email *',
            'phone' => 'Your Phone *',
            'message' => 'Your Message *',
        ],
        'send' => 'Send Message'
    ],
    'footer' => [
        'follow' => 'follow us',
        'location' => 'location',
        'contact' => 'contact us',
        'copyright' => 'COPYRIGHT © ALAND20.TECH 2021',
        'address' => [
            'first' => 'Address 1',
            'second' => 'Address 2',
            'third' => 'Address 3',
        ]
    ],
    'js_support' => 'To view this video please enable JavaScript, and consider upgrading to a web browser that supports HTML5 video',
    'login' => [
        'title' => 'Login',
        'ph' => [
            'username' => 'Username',
            'password' => 'Password'
        ],
        'remember' => 'Remember me',
        'login_btn' => 'Login'
    ],
    'admin' => [
        'nav' => [
            'dashboard' => 'dashboard',
            'landing_page' => [
                'title' => 'Landing Page',
                'slides' => 'Manage Slides',
                'edit_about' => 'Edit About Section',
            ],
            'services' => [
                'title' => 'services',
                'all' => 'All services',
                'create' => 'add new service',
            ],
            'teams' => [
                'title' => 'teams',
                'all' => 'All team members',
                'create' => 'add new member',
            ],
            'partners' => [
                'title' => 'partners',
                'all' => 'All partners',
                'create' => 'add new partner',
            ],
            'languages' => [
                'title' => 'Languages',
                'english' => 'English',
                'kurdish' => 'کوردی',
                'arabic' => 'العربية',
            ],
            'manage_users' => 'Manage Users',
            'logout' => 'logout',
        ],
        'profile' => [
            'title' => 'Profile'
        ],
        'table' => [
            'image' => 'image',
            'title' => 'title',
            'name' => 'name',
            'username' => 'username',
            'position' => 'position',
            'description' => 'description',
            'created_by' => 'created by',
            'created_at' => 'created at',
            'updated_at' => 'updated at',
            'actions' => 'actions',
        ],
        'actions' => [
            'create' => 'Create',
            'edit' => 'Edit',
            'update' => 'Update',
            'delete' => 'Delete',
            'choose' => 'Choose',
            'no_image_chosen' => 'No Image Chosen',
            'no_file_chosen' => 'No File Chosen',
        ],
        'ph' => [
            'title' => 'enter tite',
            'description' => 'enter description',
            'name' => 'enter name',
            'username' => 'enter username',
            'upload_image' => 'upload an image',
            'upload_file' => 'Upload a file',
            'current_password' => 'enter current password',
            'repeat_password' => 'Repeat password',
            'new_password' => 'enter new password',
            'repeat_new_password' => 'Repeat New Password',
            'position' => 'enter position',
            'facebook' => 'Enter Facebook profile',
            'twitter' => 'Enter twitter profile',
            'instagram' => 'Enter Instagram profile',
        ],
        'messages' => [
            'about_section' => [
                'success' => 'About section updated successfully',
                'fail' => 'Failed to update the about section',
            ],
            'slide' => [
                'success' => [
                    'create' => 'Slide added successfully',
                    'update' => 'Slide updated successfully',
                    'delete' => 'Slide deleted successfully',
                ],
                'fail' => [
                    'create' => 'Failed to add a new slide',
                    'update' => 'Failed to update the slide',
                    'invalid_file' => 'The selected type does not match the file',
                    'delete' => 'Failed to delete the slide',
                ],
            ],
            'service' => [
                'success' => [
                    'create' => 'Service added successfully',
                    'update' => 'Service updated successfully',
                    'delete' => 'Service deleted successfully',
                ],
                'fail' => [
                    'create' => 'Failed to add a new service',
                    'update' => 'Failed to update the service',
                    'delete' => 'Failed to delete the service',
                ],
            ],
            'team' => [
                'success' => [
                    'create' => 'Team member added successfully',
                    'update' => 'Team member updated successfully',
                    'delete' => 'Team member deleted successfully',
                ],
                'fail' => [
                    'create' => 'Failed to add a new team member',
                    'update' => 'Failed to update the team member',
                    'delete' => 'Failed to delete the team member',
                ],
            ],
            'partner' => [
                'success' => [
                    'create' => 'Partner added successfully',
                    'update' => 'Partner updated successfully',
                    'delete' => 'Partner deleted successfully',
                ],
                'fail' => [
                    'create' => 'Failed to add a new partner',
                    'update' => 'Failed to update the partner',
                    'delete' => 'Failed to delete the partner',
                ],
            ],
            'language' => [
                'success' => "Language updated successfully",
                'fail' => "Failed to update the language",
            ],
            'user' => [
                'success' => [
                    'create' => 'User added successfully',
                    'update' => 'User updated successfully',
                    'delete' => 'User deleted successfully',
                ],
                'fail' => [
                    'create' => 'Failed to add a new user',
                    'update' => 'Failed to update the user profile',
                    'delete' => 'Failed to delete the user profile',
                    'required_current_password' => 'Current password is required',
                    'current_password' => 'Current password is incorrect.',
                    'delete_admin' => 'Cannot process the request!',
                ],
            ],
            'mail' => [
                'success' => 'Message has been sent.',
                'fail' => 'Failed to send a message, please try again.',
            ],
            'login' => [
                'success' => 'login successful',
                'fail' => 'login failed',
            ],
        ]
    ]
];
