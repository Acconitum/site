<?php namespace ProcessWire;

/**
 * Example custom page class for pages using template “home”
 * 
 * Feel free to delete this file if you do not want it. This is here as a
 * placeholder to ensure the /site/classes/ directory exists.
 * 
 * When this file/class is present, page using template “home” will use this 
 * class “HomePage” rather than class “Page”. You can do the same for any 
 * other templates. For example, template “basic-page” would have a class 
 * named “BasicPagePage” and template “admin” would have “AdminPage”, etc.
 * 
 * Custom page classes must extend class “Page”, or one derived from it. 
 * 
 * @property string $title
 * 
 */
class HomePage extends Page {

    public function renderHead()
    {
        if (!empty($this->seoTitle)) {
            echo '<meta name="title" content="' . addslashes($this->seoTitle) . '">';
        }
        if (!empty($this->seoDescription)) {
            echo '<meta name="description" content="' . addslashes($this->seoDescription) . '">';
        }
    }
}