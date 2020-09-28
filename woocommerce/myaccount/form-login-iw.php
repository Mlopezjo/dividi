<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
<div class="container">
<div class="row" id="customer_login">
	<!-- Partie connexion -->
	<div class="col-12 col-lg-6">


<?php endif; ?>

<fieldset>
		<!-- Attribution de la legend -->
		<legend><?php esc_html_e( 'Login', 'woocommerce' ); ?></legend>
		<!-- debut formulaire -->
    <form class="d-xl-flex flex-column justify-content-xl-center woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
				<!-- Login -->
        <div class="form-group d-xl-flex justify-content-xl-center woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;
						<span class="required">*</span>
					</label>
					<input class="form-control woocommerce-Input woocommerce-Input--text input-text"
								 type="text"
								 id="username"
								 name="username"
								 autocomplete="username"
								 value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
								 required
					>
				</div>
				<!-- Password -->
        <div class="form-group d-xl-flex justify-content-xl-center woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;
						<span class="required">*</span>
					</label>
					<input class="form-control woocommerce-Input woocommerce-Input--text input-text"
								 type="password"
								 id="password"
								 name="password"
								 autocomplete="password"
                required>
				</div>

				<?php do_action( 'woocommerce_login_form' ); ?>

        <div class="form-group d-xl-flex justify-content-xl-center woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <div class="d-flex woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
							<input type="checkbox"
										 id="rememberme"
										 name="rememberme"
										 value="forever"
							>
							<span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
						</div>
        </div>

				<button class="woocommerce-button button woocommerce-form-login__submit btn btn-success" type="submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
		</form>

		<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

</fieldset>

<p class="woocommerce-LostPassword lost_password">
	<a class="text-success d-xl-flex justify-content-xl-center" href="<?php echo esc_url( wp_lostpassword_url() ); ?>" style="margin: 20px;"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
</p>

<?php do_action( 'woocommerce_login_form_end' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

	<div class="col-12 col-lg-6">
		<fieldset>
        <legend><?php esc_html_e( 'Register', 'woocommerce' ); ?></legend>

        <form class="d-xl-flex flex-column justify-content-xl-center woocommerce-form woocommerce-form-register register" method="post" <?php do_action( 'woocommerce_register_form_tag' ); ?>>

					<?php do_action( 'woocommerce_register_form_start' ); ?>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

            <div class="form-group d-xl-flex justify-content-xl-center woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;
								<span class="required">*</span>
							</label>
							<input class="form-control woocommerce-Input woocommerce-Input--text input-text"
										 type="text"
										 id="reg_username"
										 name="username"
										 autocomplete="username"
                     value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
										 required
							>
						</div>

					<?php endif; ?>

            <div class="form-group d-xl-flex justify-content-xl-center woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;
								<span class="required">*</span>
							</label>
							<input class="form-control" type="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>"
                    name="email">
						</div>

					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

            <div class="form-group d-xl-flex justify-content-xl-center woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;
								<span class="required">*</span>
							</label>
							<input class="form-control woocommerce-Input woocommerce-Input--text input-text" type="text" id="reg_password" name="password" autocomplete="new-password" required="">
						</div>

					<?php else : ?>

						<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

					<?php endif; ?>
					<?php do_action( 'woocommerce_register_form' ); ?>
            <p
                class="text-center woocommerce-FormRow form-row">
								<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
						</p>
            <button class="btn btn-success"
										type="submit"
										name="register"
										value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">
										<?php esc_html_e( 'Register', 'woocommerce' ); ?>
						</button>

						<?php do_action( 'woocommerce_register_form_end' ); ?>

        </form>
    </fieldset>

	</div>

</div>
</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

<?php endif; ?>
