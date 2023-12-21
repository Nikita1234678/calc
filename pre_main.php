<?php

require_once "Classes/DataModel/LayoutDataModel.php";
require_once "Classes/GlobalsUtility.php";

use Classes\GlobalsUtility;

$globalsUtility = new GlobalsUtility();
$layoutDataModel = $globalsUtility -> GetLayoutDataModel();

$layoutDataModel->SetPageName("");

$layoutDataModel-> AddBodySegment(<<<BODY
<iframe width="100%" height="100%"  src="https://www.youtube.com/embed/_NaYvAreOwQ?si=T3w2usD25Ilvi7J9" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
BODY
);

require_once "Layout/layout.inc";