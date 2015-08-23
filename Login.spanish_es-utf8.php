<?php
// Version: 2.1 Beta 2; Login

global $context;

// Registration agreement page.
$txt['registration_agreement'] = 'Acuerdo de registro';
$txt['agreement_agree'] = 'Acepto los términos del acuerdo.';
$txt['agreement_agree_coppa_above'] = 'Acepto los términos del acuerdo y certifico que tengo %1$d años o más.';
$txt['agreement_agree_coppa_below'] = 'Acepto los términos del acuerdo y certifico que soy menor de %1$d años.';
$txt['agree_coppa_above'] = 'Tengo al menos %1$d años.';
$txt['agree_coppa_below'] = 'Tengo menos de %1$d años.';

// Registration form.
$txt['registration_form'] = 'Formulario de registro';
$txt['need_username'] = 'Debes introducir un nombre de usuario.';
$txt['no_password'] = 'No has introducido una contraseña.';
$txt['incorrect_password'] = 'Contraseña incorrecta';
$txt['choose_username'] = 'Escoge un nombre de usuario';
$txt['maintain_mode'] = 'Maintenance Mode';
$txt['registration_successful'] = 'Registro correcto';
$txt['now_a_member'] = '¡Perfecto! ¡Ya eres un miembro de este nuestro foro!';
// Use numeric entities in the below string.
$txt['your_password'] = 'y tu contraseña es';
$txt['valid_email_needed'] = 'Por favor, introduce una dirección de correo electrónico válida, %1$s.';
$txt['required_info'] = 'Información requerida';
$txt['identification_by_smf'] = 'Used to identify you on the forum.';
$txt['additional_information'] = 'Información complementaria';
$txt['warning'] = '¡Advertencia!';
$txt['only_members_can_access'] = 'Sólo los miembros registrados tienen acceso a esta sección.';
$txt['login_below'] = 'Por favor inicia sesión.';
$txt['login_below_or_register'] = 'Por favor inicia sesión o <a href="%1$s">regístrate</a> con %2$s';

// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Puedes cambiarlo más adelante desde tu perfil de usuario o visitanto la siguiente página después de iniciar sesión:';
$txt['your_username_is'] = 'Tu nombre de usuario es: ';

$txt['login_hash_error'] = 'Debido a una mejora en la seguridad del foro, debes introducir de nuevo tu contraseña.';

$txt['ban_register_prohibited'] = 'Lo sentimos, pero hay una restricción activa que te afecta y te impide crear un usuario nuevo.';

$txt['activate_account'] = 'Activación de la cuenta';
$txt['activate_success'] = 'Tu cuenta ha sido activada satisfactoriamente. Ya puedes iniciar sesión.';
$txt['activate_not_completed1'] = 'Tu correo electrónico debe ser validado antes de que puedas iniciar sesión.';
$txt['activate_not_completed2'] = '¿Necesitas otro email de activación?';
$txt['activate_after_registration'] = '¡Gracias por registrate! Recibirás en breve un correo electrónico con un enlace que debes visitar para activar tu cuenta. Si no lo recibes, mira en tu carpeta de correo basura (spam), solicita uno nuevo o contacta con la administración.';
$txt['invalid_userid'] = 'El usuario no existe';
$txt['invalid_activation_code'] = 'Código de activación no válido';
$txt['invalid_activation_username'] = 'Nombre de usuario o email';
$txt['invalid_activation_new'] = 'Si te has dado de alta con un correo electrónico no válido, escribe aquí uno nuevo y tu contraseña.';
$txt['invalid_activation_new_email'] = 'Nuevo email';
$txt['invalid_activation_password'] = 'Contraseña';
$txt['invalid_activation_resend'] = 'Reenviar código de activación';
$txt['invalid_activation_known'] = 'Si ya sabes tu código de activación, puedes escribirlo a continuación.';
$txt['invalid_activation_retry'] = 'Código de activación';
$txt['invalid_activation_submit'] = 'Activar cuenta';

$txt['coppa_no_concent'] = 'The administrator has still not received parent/guardian consent for your account.';
$txt['coppa_need_more_details'] = 'Need more details?';

$txt['awaiting_delete_account'] = 'Your account has been marked for deletion!<br>If you wish to restore your account, please check the &quot;Reactivate my account&quot; box, and login again.';
$txt['undelete_account'] = 'Reactivate my account';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'New Password Details';
$txt['change_password_login'] = 'Your login details at';
$txt['change_password_new'] = 'have been changed and your password reset. Below are your new login details.';

$txt['in_maintain_mode'] = 'This board is in Maintenance Mode.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Please read and accept the agreement before signing up.';
$txt['register_passwords_differ_js'] = 'The two passwords you entered are not the same!';

$txt['approval_after_registration'] = 'Thank you for signing up. The admin must approve your registration before you may begin to use your account, you will receive an email shortly advising you of the admins decision.';

$txt['admin_settings_desc'] = 'Here you can change a variety of settings related to registration of new members.';

$txt['setting_registration_method'] = 'Método de registro para nuevos usuarios';
$txt['setting_registration_disabled'] = 'Registros cerrados';
$txt['setting_registration_standard'] = 'Registro inmediato';
$txt['setting_registration_activate'] = 'Activación por email';
$txt['setting_registration_approval'] = 'Aprobación manual';
$txt['setting_send_welcomeEmail'] = 'Enviar correo de bienvenida a nuevos miembros';

$txt['setting_coppaAge'] = 'Edad mínima para registrarse';
$txt['setting_coppaType'] = 'Acción a realizar cuando un usuario más joven se registre';
$txt['setting_coppaType_reject'] = 'Rechazar el registro';
$txt['setting_coppaType_approval'] = 'Solicitar aprobación parental';
$txt['setting_coppaPost'] = 'Correo postal donde enviar el formulario de aprobación';
$txt['setting_coppaPost_desc'] = 'Sólo se muestra si la restricción de edad está vigente';
$txt['setting_coppaFax'] = 'Número de fax donde enviar el formulario de aprobación';
$txt['setting_coppaPhone'] = 'Teléfono de contacto para padres';

$txt['admin_register'] = 'Registro de un nuevo usuario';
$txt['admin_register_desc'] = 'Desde aquí puedes crear nuevas cuentas de usuario, y si así lo deseas, enviarles por email los detalles.';
$txt['admin_register_username'] = 'Nuevo nombre de usuario';
$txt['admin_register_email'] = 'Correo electrónico';
$txt['admin_register_password'] = 'Contraseña';
$txt['admin_register_username_desc'] = 'Nombre del nuevo usuario';
$txt['admin_register_email_desc'] = 'Correo electrónico del nuevo usuario';
$txt['admin_register_password_desc'] = 'Contraseña del nuevo usuario';
$txt['admin_register_email_detail'] = 'Enviarle una nueva contraseña por email';
$txt['admin_register_email_detail_desc'] = 'Para que esto funcione, se debe introducir obligatoriamente un correo electrónico válido';
$txt['admin_register_email_activate'] = 'Require user to activate the account';
$txt['admin_register_group'] = 'Primary Membergroup';
$txt['admin_register_group_desc'] = 'Primary membergroup new member will belong to';
$txt['admin_register_group_none'] = '(no primary membergroup)';
$txt['admin_register_done'] = 'Member %1$s has been registered successfully!';

$txt['coppa_title'] = 'Age Restricted Forum';
$txt['coppa_after_registration'] = 'Thank you for signing up with ' . $context['forum_name_html_safe'] . '.<br><br>Because you fall under the age of {MINIMUM_AGE}, it is a legal requirement
	to obtain your parent or guardian\'s permission before you may begin to use your account. To arrange for account activation please print off the form below:';
$txt['coppa_form_link_popup'] = 'Load Form In New Window';
$txt['coppa_form_link_download'] = 'Download Form as Text File';
$txt['coppa_send_to_one_option'] = 'Then arrange for your parent/guardian to send the completed form by:';
$txt['coppa_send_to_two_options'] = 'Then arrange for your parent/guardian to send the completed form by either:';
$txt['coppa_send_by_post'] = 'Post, to the following address:';
$txt['coppa_send_by_fax'] = 'Fax, to the following number:';
$txt['coppa_send_by_phone'] = 'Alternatively, arrange for them to phone the administrator at {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Permission form for registration at ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Address';
$txt['coppa_form_date'] = 'Date';
$txt['coppa_form_body'] = 'I {PARENT_NAME},<br><br>Give permission for {CHILD_NAME} (child name) to become a fully registered member of the forum: ' . $context['forum_name_html_safe'] . ', with the username: {USER_NAME}.<br><br>I understand that certain personal information entered by {USER_NAME} may be shown to other users of the forum.<br><br>Signed:<br>{PARENT_NAME} (Parent/Guardian).';

$txt['visual_verification_sound_again'] = 'Play again';
$txt['visual_verification_sound_close'] = 'Close window';
$txt['visual_verification_sound_direct'] = 'Having problems hearing this?  Try a direct link to it.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'El nombre de usuario está disponible';
$txt['registration_username_unavailable'] = 'El nombre de usuario está no disponible';
$txt['registration_username_check'] = 'Comprobar si el nombre de usuario está disponible';
$txt['registration_password_short'] = 'La contraseña es demasiado corta';
$txt['registration_password_reserved'] = 'La contraseña contiene tu nombre de usuario y/o email';
$txt['registration_password_numbercase'] = 'La contraseña debe contener mayúsculas, minúsculas y números';
$txt['registration_password_no_match'] = 'La contraseña y la verificación no coinciden';
$txt['registration_password_valid'] = 'La contraseña es válida';

$txt['registration_errors_occurred'] = 'Se han detectado los siguientes fallos en tu formulario de registro. Por favor corrígelos para continuar:';

?>