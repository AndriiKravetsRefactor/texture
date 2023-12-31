<?php

use WPGDPRC\Utils\AdminForm;
use WPGDPRC\Utils\Elements;
use WPGDPRC\WordPress\Admin\Pages\PageDashboard;
use WPGDPRC\WordPress\Config;
use WPGDPRC\Utils\Template;
use WPGDPRC\WordPress\Settings;

/**
 * @var string $current
 * @var string $title
 * @var string $intro
 */

?>

<form method="post" action="<?php echo PageDashboard::getFormAction( $current ); ?>">
    <input type="hidden" name="tab" value="<?php echo $current; ?>"/>
    <div class="grid-x grid-margin-x grid-margin-y">
        <header class="wpgdprc-content__header cell large-12">
            <h2 class="wpgdprc-content__title"><?php echo _x( 'Upgrade and unlock all business features', 'admin', 'wp-gdpr-compliance' ); ?></h2>
        </header>
        <div class="cell medium-12 large-8">
            <div class="wpgdprc-content__text">
                <h3 class="wpgdprc-content__title h4">
					<?php echo _x( 'Business websites often have to comply with more than just GDPR', 'admin', 'wp-gdpr-compliance' ); ?>
                </h3>

                <p>
                    <strong><?= _x('Is that you?', 'admin', 'wp-gdpr-compliance') ?></strong><br>
                    <?= _x('If so, we recommend trying our free 30-day trial so you can:', 'admin', 'wp-gdpr-compliance') ?>
                </p>
                <ul class="list-disc">
                    <li><?= _x('<strong>Remove all risk</strong> by complying with all global privacy regulations  (GDPR, ePrivacy, and CCPA)', 'admin', 'wp-gdpr-compliance') ?> </li>
                    <li><?= _x('<strong>Unlock our powerful scanner</strong> that notifies you whenever one of your webpages is illegally tracking and saving private data.', 'admin', 'wp-gdpr-compliance') ?> </li>
                    <li><?= _x('<strong>Customize your content</strong> and so much more!', 'admin', 'wp-gdpr-compliance') ?> </li>
                </ul>

                <p>
					<?php Elements::link( Config::premiumUrl(), _x( 'Start your 30-day free trial', 'admin', 'wp-gdpr-compliance' ), [
						'target' => '_blank',
						'class'  => 'wpgdprc-button wpgdprc-button--small wpgdprc-sign-up-button'
					] ); ?>
                </p>

                <hr class="margin-vertical-2">

                <h4 class="wpgdprc-content__title h5">
                    <?php echo _x( 'Replace your free pop-up with the upgraded one', 'admin', 'wp-gdpr-compliance' ); ?>
                </h4>
                <p>
                    <?php echo _x( 'Already have a Cookie Information account and added your domain? Great! Hit the toggle below, and we’ll automatically Replace your free pop-up with the global one.', 'admin', 'wp-gdpr-compliance' ); ?>
                </p>

                <div class="wpgdprc-form__field--pluginmode">
                    <?php
                    AdminForm::renderSettingField( 'truefalse', _x( 'Turn on', 'admin', 'wp-gdpr-compliance' ), Settings::KEY_PREMIUM, [
                        'value' => Settings::isPremium() ? '1' : '0',
                        'class' => 'regular-text',
                    ], false );
                    ?>
                </div>
            </div>
        </div>

        <div class="cell large-12 xlarge-4">
            <div class="wpgdprc-comparison-slider">
                <div class="wpgdprc-comparison-slider__image-wrapper wpgdprc-comparison-slider__bottom">
                    <?php Template::renderSvg('cookie-information-banner.svg') ?>

                </div>
                <div class="wpgdprc-comparison-slider__image-wrapper wpgdprc-comparison-slider__top">
                    <?php Template::renderSvg('wpgdprc-cookie-banner.svg') ?>
                </div>

                <div class="wpgdprc-comparison-slider__line">
                    <div class="wpgdprc-comparison-slider__button">
                        <div class="wpgdprc-comparison-slider__carret wpgdprc-comparison-slider__carret-left">
                            <?php Template::renderIcon('caret-left', 'fontawesome-pro-solid') ?>
                        </div>
                        <div class="wpgdprc-comparison-slider__carret wpgdprc-comparison-slider__carret-right">
                            <?php Template::renderIcon('caret-right', 'fontawesome-pro-solid') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
