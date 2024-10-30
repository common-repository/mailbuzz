<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.mailbuzz.io/
 * @since      1.0.0
 *
 * @package    Mailbuzz
 * @subpackage Mailbuzz/public/partials
 */

$options = mailbuzz_get_options();

if (!$options['enable_popup']) {
    return;
}

global $wp;
?>

<aside class="mb-modal-container" style="display: none;">
    <div class="mb-trigger mb-js-trigger">
        <button>Subscribe Now!</button>
    </div>
    <div class="mb-popup">
        <button class="mb-popup__close mb-js-trigger"></button>
        <div class="mb-popup__inner">
            <?php if (isset($options['popup_image']) && isset($options['popup_image']['mediaUrl']) && $options['popup_image']['mediaUrl']) : ?>
            <img class="mb-popup__image" src="<?php echo esc_url($options['popup_image']['mediaUrl']); ?>"
                alt="<?php echo esc_attr($options['title']) ?>" />
            <?php endif; ?>
            <div class="mb-popup__content">
                <h4 class="mb-popup__title"><?php echo esc_html($options['title']) ?></h4>
                <p class="mb-popup__message" style="display: none"></p>
                <form id="mb-popup-form" method="POST"
                    action="https://mailbuzz.io/api/subscribe/<?php echo esc_html($options['audience_id']) ?>">
                    <input class="mb-popup__email mb-popup__input" type="email" placeholder="Email Address"
                        name="email" />
                    <input type="hidden" name="ref" value="<?php echo home_url($wp->request) ?>" />
                    <button class="mb-popup__submit" type="submit">Notify Me</button>
                </form>
                <p class="mb-popup__terms">
                    No spam, we promise. You can
                    unsubscribe at any time and we'll
                    never share your details without your
                    permission.
                </p>
                <p class="mb-popup__byline">Made with <a
                        href="https://mailbuzz.io/?utm_medium=wordpress&utm_source=<?php echo get_bloginfo('url') ?>&utm_content=made_with">MailBuzz</a>
                </p>
            </div>
        </div>
    </div>
</aside>