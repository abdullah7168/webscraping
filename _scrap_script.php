<?php


if(isset($_GET['variable'])){
    $data = array();
    $html = file_get_contents('https://example.com'); //get the html returned from the following url
    $_dom = new DOMDocument();
    libxml_use_internal_errors(TRUE); //disable libxml errors
    

    //if any html is actually returned
    if(!empty($html)){ 
        $pokemon_doc->loadHTML($html);
        libxml_clear_errors(); //remove errors for yucky html
        $pokemon_xpath = new DOMXPath($_dom);
    



        foreach($_dom->getElementsByTagName('td') as $ptag)
        {
            if($ptag->getAttribute('class')=="tmx")
            {
                // can also get nodes, to trevarse more deep into the
                // DOM element. 
                $data[] = $ptag->nodeValue;
            }
        }
    }
    

    // return data
    exit;
    
    
}
