/**
 * Custom Shortcode: [greet]
 * 
 * This function creates a shortcode that displays a greeting message.
 * You can use the shortcode [greet name="YourName"] to personalize the greeting.
 * If no name is provided, it defaults to "Guest".
 *
 * @param array $atts Shortcode attributes, allowing for a customizable name.
 * @return string The greeting message to be displayed.
 */
function greeting_shortcode($atts) {
    // Set default attribute values
    $atts = shortcode_atts(array('name' => 'Guest'), $atts);

    // Return the greeting message, ensuring the name is safely outputted
    return 'Hello, ' . esc_html($atts['name']) . '!';
}

// Register the shortcode with WordPress
add_shortcode('greet', 'greeting_shortcode');

