<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2018 (original work) Open Assessment Technologies SA;
 *               
 * 
 */

/**
 * Generated using taoDevTools 2.21.0
 */
return array(
    'name' => 'taoExample',
    'label' => 'Extension sample',
    'description' => '',
    'license' => 'GPL-2.0',
    'version' => '1.0.0',
    'author' => 'Open Assessment Technologies SA',
    'requires' => array(
        'generis' => '>=2.16.2',
        'tao' => '>=2.23.5',
        'taoItems' => '>=2.13.2',
        'taoQtiItem' => '>=2.21.2',
        'taoQtiTest' => '>=2.24.2',
        'qtiItemPci' => '>=0.1.4',
        'funcAcl' => '>=2.7.2',
        'taoDevTools' => '>=2.21.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#taoExampleManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#taoExampleManager', array('ext'=>'taoExample')),
    ),
    'install' => array(
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/taoExample' => 'oat\\taoExample\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'taoExample/',
        
        #BASE WWW required by JS
        'BASE_WWW' => ROOT_URL.'taoExample/views/'
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);
