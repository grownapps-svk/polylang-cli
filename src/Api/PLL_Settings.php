<?php

namespace Polylang_CLI\Api;

if (class_exists('Polylang_CLI\Api\PLL_Settings')) {
    return;
}

class PLL_Settings extends \PLL_Settings_CPT
{
    public function get_post_types()
    {
        return (array) $this->post_types;
    }

    public function get_taxonomies()
    {
        return (array) $this->taxonomies;
    }

    public function update($options)
    {
        return parent::update($options);
    }
}