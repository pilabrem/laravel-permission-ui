<?php

return [

	'user-management' => [
		'title' => 'Gestion Utilisateur',
		'created_at' => 'Date',
		'fields' => [
		],
	],

	'roles' => [
		'title' => 'Rôles',
		'created_at' => 'Date',
		'fields' => [
			'name' => 'Nom',
			'permission' => 'Permissions',
		],
	],

	'users' => [
		'title' => 'Utilisateurs',
		'created_at' => 'Date',
		'fields' => [
			'name' => 'Nom et prénom(s)',
			'email' => 'Email',
			'password' => 'Mot de passe',
			'roles' => 'Rôles',
			'remember-token' => 'Token de rappel',
		],
	],
    'change_password' => [
        'title' => 'Changer mot de passe',
        'current_password' => 'Mot de passe actuel*',
        'new_password' => 'Nouveau mot de passe*',
        'new_password_confirmation' => 'Confirmer Nouveau mot de passe*',
    ],
    'permissions' => [
        'title' => 'Permissions',
        'created_at' => 'Date',
        'fields' => [
            'name' => 'Nom',
        ],
    ],
	'app_create' => 'Créer',
	'app_save' => 'Enregistrer',
	'app_edit' => 'Editer',
	'app_view' => 'Voir',
	'app_update' => 'Enregistrer',
	'app_list' => 'Liste',
	'app_no_entries_in_table' => 'Aucune données trouvée.',
	'custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Déconnexion',
	'app_add_new' => 'Ajouter Nouveau',
	'app_are_you_sure' => 'Êtes vous sûre?',
	'app_back_to_list' => 'Retour à la liste',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Supprimer',
	'global_title' => 'Gestionnaire Rôles-Permissions',
];
