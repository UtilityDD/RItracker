<?php



$tdatamovement = array();
$tdatamovement[".searchableFields"] = array();
$tdatamovement[".ShortName"] = "movement";
$tdatamovement[".OwnerID"] = "";
$tdatamovement[".OriginalTable"] = "movement";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );

$tdatamovement[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamovement[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamovement[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmovement = array();
$fieldToolTipsmovement = array();
$pageTitlesmovement = array();
$placeHoldersmovement = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmovement["English"] = array();
	$fieldToolTipsmovement["English"] = array();
	$placeHoldersmovement["English"] = array();
	$pageTitlesmovement["English"] = array();
	$fieldLabelsmovement["English"]["from"] = "From";
	$fieldToolTipsmovement["English"]["from"] = "";
	$placeHoldersmovement["English"]["from"] = "";
	$fieldLabelsmovement["English"]["to"] = "To";
	$fieldToolTipsmovement["English"]["to"] = "";
	$placeHoldersmovement["English"]["to"] = "";
	$fieldLabelsmovement["English"]["date"] = "Date";
	$fieldToolTipsmovement["English"]["date"] = "";
	$placeHoldersmovement["English"]["date"] = "";
	$fieldLabelsmovement["English"]["receivememo"] = "Receive Memo";
	$fieldToolTipsmovement["English"]["receivememo"] = "";
	$placeHoldersmovement["English"]["receivememo"] = "";
	if (count($fieldToolTipsmovement["English"]))
		$tdatamovement[".isUseToolTips"] = true;
}


	$tdatamovement[".NCSearch"] = true;



$tdatamovement[".shortTableName"] = "movement";
$tdatamovement[".nSecOptions"] = 0;

$tdatamovement[".mainTableOwnerID"] = "";
$tdatamovement[".entityType"] = 0;

$tdatamovement[".strOriginalTableName"] = "movement";

	



$tdatamovement[".showAddInPopup"] = false;

$tdatamovement[".showEditInPopup"] = false;

$tdatamovement[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamovement[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamovement[".listAjax"] = false;
//	temporary
$tdatamovement[".listAjax"] = false;

	$tdatamovement[".audit"] = false;

	$tdatamovement[".locking"] = false;


$pages = $tdatamovement[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamovement[".edit"] = true;
	$tdatamovement[".afterEditAction"] = 1;
	$tdatamovement[".closePopupAfterEdit"] = 1;
	$tdatamovement[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamovement[".add"] = true;
$tdatamovement[".afterAddAction"] = 1;
$tdatamovement[".closePopupAfterAdd"] = 1;
$tdatamovement[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamovement[".list"] = true;
}



$tdatamovement[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamovement[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamovement[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamovement[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamovement[".printFriendly"] = true;
}



$tdatamovement[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamovement[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamovement[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamovement[".isUseAjaxSuggest"] = true;

$tdatamovement[".rowHighlite"] = true;





$tdatamovement[".ajaxCodeSnippetAdded"] = false;

$tdatamovement[".buttonsAdded"] = false;

$tdatamovement[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamovement[".isUseTimeForSearch"] = false;


$tdatamovement[".badgeColor"] = "cd853f";


$tdatamovement[".allSearchFields"] = array();
$tdatamovement[".filterFields"] = array();
$tdatamovement[".requiredSearchFields"] = array();

$tdatamovement[".googleLikeFields"] = array();
$tdatamovement[".googleLikeFields"][] = "receivememo";
$tdatamovement[".googleLikeFields"][] = "from";
$tdatamovement[".googleLikeFields"][] = "to";
$tdatamovement[".googleLikeFields"][] = "date";



$tdatamovement[".tableType"] = "list";

$tdatamovement[".printerPageOrientation"] = 0;
$tdatamovement[".nPrinterPageScale"] = 100;

$tdatamovement[".nPrinterSplitRecords"] = 40;

$tdatamovement[".geocodingEnabled"] = false;










$tdatamovement[".pageSize"] = 20;

$tdatamovement[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamovement[".strOrderBy"] = $tstrOrderBy;

$tdatamovement[".orderindexes"] = array();

$tdatamovement[".sqlHead"] = "SELECT receivememo,  `from`,  `to`,  `date`";
$tdatamovement[".sqlFrom"] = "FROM movement";
$tdatamovement[".sqlWhereExpr"] = "";
$tdatamovement[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamovement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamovement[".arrGroupsPerPage"] = $arrGPP;

$tdatamovement[".highlightSearchResults"] = true;

$tableKeysmovement = array();
$tableKeysmovement[] = "receivememo";
$tdatamovement[".Keys"] = $tableKeysmovement;


$tdatamovement[".hideMobileList"] = array();




//	receivememo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "receivememo";
	$fdata["GoodName"] = "receivememo";
	$fdata["ownerTable"] = "movement";
	$fdata["Label"] = GetFieldLabel("movement","receivememo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "receivememo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "receivememo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamovement["receivememo"] = $fdata;
		$tdatamovement[".searchableFields"][] = "receivememo";
//	from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "from";
	$fdata["GoodName"] = "from";
	$fdata["ownerTable"] = "movement";
	$fdata["Label"] = GetFieldLabel("movement","from");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "from";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`from`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamovement["from"] = $fdata;
		$tdatamovement[".searchableFields"][] = "from";
//	to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "to";
	$fdata["GoodName"] = "to";
	$fdata["ownerTable"] = "movement";
	$fdata["Label"] = GetFieldLabel("movement","to");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "to";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`to`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamovement["to"] = $fdata;
		$tdatamovement[".searchableFields"][] = "to";
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "movement";
	$fdata["Label"] = GetFieldLabel("movement","date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamovement["date"] = $fdata;
		$tdatamovement[".searchableFields"][] = "date";


$tables_data["movement"]=&$tdatamovement;
$field_labels["movement"] = &$fieldLabelsmovement;
$fieldToolTips["movement"] = &$fieldToolTipsmovement;
$placeHolders["movement"] = &$placeHoldersmovement;
$page_titles["movement"] = &$pageTitlesmovement;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["movement"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["movement"] = array();



	
				$strOriginalDetailsTable="receive";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="receive";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "receive";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["movement"][0] = $masterParams;
				$masterTablesData["movement"][0]["masterKeys"] = array();
	$masterTablesData["movement"][0]["masterKeys"][]="memono";
				$masterTablesData["movement"][0]["detailKeys"] = array();
	$masterTablesData["movement"][0]["detailKeys"][]="receivememo";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_movement()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "receivememo,  `from`,  `to`,  `date`";
$proto0["m_strFrom"] = "FROM movement";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "receivememo",
	"m_strTable" => "movement",
	"m_srcTableName" => "movement"
));

$proto6["m_sql"] = "receivememo";
$proto6["m_srcTableName"] = "movement";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "from",
	"m_strTable" => "movement",
	"m_srcTableName" => "movement"
));

$proto8["m_sql"] = "`from`";
$proto8["m_srcTableName"] = "movement";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "to",
	"m_strTable" => "movement",
	"m_srcTableName" => "movement"
));

$proto10["m_sql"] = "`to`";
$proto10["m_srcTableName"] = "movement";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "movement",
	"m_srcTableName" => "movement"
));

$proto12["m_sql"] = "`date`";
$proto12["m_srcTableName"] = "movement";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "movement";
$proto15["m_srcTableName"] = "movement";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "receivememo";
$proto15["m_columns"][] = "from";
$proto15["m_columns"][] = "to";
$proto15["m_columns"][] = "date";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "movement";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "movement";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="movement";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_movement = createSqlQuery_movement();


	
		;

				

$tdatamovement[".sqlquery"] = $queryData_movement;

$tableEvents["movement"] = new eventsBase;
$tdatamovement[".hasEvents"] = false;

?>