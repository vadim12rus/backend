<?php

    /**
     * @param string $templateName
     * @param array $vars
     * @return string
     */
    function getView($templateName, $vars)
    {
        $content = '';

        $templateFilePath = TEMPLATE_DIR . "/" . $templateName;
        if (file_exists($templateFilePath))
        {
            $content = file_get_contents($templateFilePath);

            if (!empty($vars))
            {
                foreach($vars as $key => $value)
                {
                    $placeholder = '{$' . $key . '}';
                    $content = str_replace($placeholder, $value, $content);
                }
            }
        }

        return $content;
    }
