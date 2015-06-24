<?php

    $merge_configs=array();   

    $view_config= new Soulware\EditViewOnInstall\viewMergeConfig(
            'application'
            ,'SugarView.php'            // file
            ,'include/MVC/View'         // path
            ,'SugarView'                // class
            ,'_getModuleTitleParams'    // function
            ,'replace'                  // action
            ,'
//BreadCrumbs
        $params = array($this->_getModuleTitleListParam($browserTitle));
        $iconPath = "";
        $module = $this->module;
        $the_title = "<div class=\'moduleTitle\'>\n";

        if(is_file(SugarThemeRegistry::current()->getImageURL(\'icon_\'.$module.\'_32.png\',false)))
        {
            $iconPath = SugarThemeRegistry::current()->getImageURL(\'icon_\'.$module.\'_32.png\');
        } 
        else if (is_file(SugarThemeRegistry::current()->getImageURL(\'icon_\'.ucfirst($module).\'_32.png\',false)))
        {
            $iconPath = SugarThemeRegistry::current()->getImageURL(\'icon_\'.ucfirst($module).\'_32.png\');
        }

        if (!empty($iconPath)) {
            $url = (!empty($index_url_override)) ? $index_url_override : "index.php?module={$module}&action=index";
            array_unshift ($params,"<a href=\'{$url}\'><img src=\'{$iconPath}\' ". "alt=\'".$module."\' title=\'".$module."\' align=\'absmiddle\'></a>");
	}
        
        if (isset($this->action)){
            switch ($this->action) {
            case \'EditView\':
                if(!empty($this->bean->id) && (empty($_REQUEST[\'isDuplicate\']) || $_REQUEST[\'isDuplicate\'] === \'false\')) {
                    $params[] = "<a href=\'index.php?module={$this->module}&action=DetailView&record={$this->bean->id}\'>".$this->bean->get_summary_text()."</a>";
                    $params[] = $GLOBALS[\'app_strings\'][\'LBL_EDIT_BUTTON_LABEL\'];
                }
                else
                    $params[] = $GLOBALS[\'app_strings\'][\'LBL_CREATE_BUTTON_LABEL\'];
                break;
            case \'DetailView\':
                $beanName = $this->bean->get_summary_text();
                $params[] = $beanName;
                break;
            }
        }

        return $params;
//BreadCrumbs end
                ' // code/content to include
    );
    $view_config->original_content=
'        $params = array($this->_getModuleTitleListParam($browserTitle));
		//$params = array();
        if (isset($this->action)){
            switch ($this->action) {
            case \'EditView\':
                if(!empty($this->bean->id) && (empty($_REQUEST[\'isDuplicate\']) || $_REQUEST[\'isDuplicate\'] === \'false\')) {
                    $params[] = "<a href=\'index.php?module={$this->module}&action=DetailView&record={$this->bean->id}\'>".$this->bean->get_summary_text()."</a>";
                    $params[] = $GLOBALS[\'app_strings\'][\'LBL_EDIT_BUTTON_LABEL\'];
                }
                else
                    $params[] = $GLOBALS[\'app_strings\'][\'LBL_CREATE_BUTTON_LABEL\'];
                break;
            case \'DetailView\':
                $beanName = $this->bean->get_summary_text();
                $params[] = $beanName;
                break;
            }
        }

        return $params;
';
    $merge_configs[]=$view_config;

    $view_config= new Soulware\EditViewOnInstall\viewMergeConfig(
            'application'
            ,'SugarView.php'            // file
            ,'include/MVC/View'         // path
            ,'SugarView'                // class
            ,'getModuleTitle'    // function
            ,'replace'                  // action
            ,'
//BreadCrumbs
        $params = $this->_getModuleTitleParams(true);
        $index = 0;

        if(SugarThemeRegistry::current()->directionality == "rtl") {
                $params = array_reverse($params);
        }
        /*
        if(count($params) > 1) {
                array_shift($params);
        }
         */
        $count = count($params);
//BreadCrumbs end
                ' // code/content to include
    );
    $view_config->original_content=
'        $params = $this->_getModuleTitleParams();
        $index = 0;

		if(SugarThemeRegistry::current()->directionality == "rtl") {
			$params = array_reverse($params);
		}
		if(count($params) > 1) {
			array_shift($params);
		}
		$count = count($params);
';
    $merge_configs[]=$view_config;

