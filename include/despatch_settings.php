<?php



$tdatadespatch = array();
$tdatadespatch[".searchableFields"] = array();
$tdatadespatch[".ShortName"] = "despatch";
$tdatadespatch[".OwnerID"] = "";
$tdatadespatch[".OriginalTable"] = "despatch";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatadespatch[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadespatch[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadespatch[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsdespatch = array();
$fieldToolTipsdespatch = array();
$pageTitlesdespatch = array();
$placeHoldersdespatch = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdespatch["English"] = array();
	$fieldToolTipsdespatch["English"] = array();
	$placeHoldersdespatch["English"] = array();
	$pageTitlesdespatch["English"] = array();
	$fieldLabelsdespatch["English"]["from"] = "From";
	$fieldToolTipsdespatch["English"]["from"] = "";
	$placeHoldersdespatch["English"]["from"] = "";
	$fieldLabelsdespatch["English"]["to"] = "To";
	$fieldToolTipsdespatch["English"]["to"] = "";
	$placeHoldersdespatch["English"]["to"] = "";
	$fieldLabelsdespatch["English"]["memono"] = "Memo No";
	$fieldToolTipsdespatch["English"]["memono"] = "";
	$placeHoldersdespatch["English"]["memono"] = "";
	$fieldLabelsdespatch["English"]["memodate"] = "Memo Date";
	$fieldToolTipsdespatch["English"]["memodate"] = "";
	$placeHoldersdespatch["English"]["memodate"] = "";
	$fieldLabelsdespatch["English"]["subject"] = "Subject";
	$fieldToolTipsdespatch["English"]["subject"] = "";
	$placeHoldersdespatch["English"]["subject"] = "";
	if (count($fieldToolTipsdespatch["English"]))
		$tdatadespatch[".isUseToolTips"] = true;
}


	$tdatadespatch[".NCSearch"] = true;



$tdatadespatch[".shortTableName"] = "despatch";
$tdatadespatch[".nSecOptions"] = 0;

$tdatadespatch[".mainTableOwnerID"] = "";
$tdatadespatch[".entityType"] = 0;

$tdatadespatch[".strOriginalTableName"] = "despatch";

	



$tdatadespatch[".showAddInPopup"] = false;

$tdatadespatch[".showEditInPopup"] = false;

$tdatadespatch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadespatch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadespatch[".listAjax"] = false;
//	temporary
$tdatadespatch[".listAjax"] = false;

	$tdatadespatch[".audit"] = false;

	$tdatadespatch[".locking"] = false;


$pages = $tdatadespatch[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadespatch[".edit"] = true;
	$tdatadespatch[".afterEditAction"] = 1;
	$tdatadespatch[".closePopupAfterEdit"] = 1;
	$tdatadespatch[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadespatch[".add"] = true;
$tdatadespatch[".afterAddAction"] = 1;
$tdatadespatch[".closePopupAfterAdd"] = 1;
$tdatadespatch[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadespatch[".list"] = true;
}



$tdatadespatch[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadespatch[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadespatch[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadespatch[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadespatch[".printFriendly"] = true;
}



$tdatadespatch[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadespatch[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadespatch[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadespatch[".isUseAjaxSuggest"] = true;

$tdatadespatch[".rowHighlite"] = true;





$tdatadespatch[".ajaxCodeSnippetAdded"] = false;

$tdatadespatch[".buttonsAdded"] = false;

$tdatadespatch[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadespatch[".isUseTimeForSearch"] = false;


$tdatadespatch[".badgeColor"] = "9acd32";


$tdatadespatch[".allSearchFields"] = array();
$tdatadespatch[".filterFields"] = array();
$tdatadespatch[".requiredSearchFields"] = array();

$tdatadespatch[".googleLikeFields"] = array();
$tdatadespatch[".googleLikeFields"][] = "from";
$tdatadespatch[".googleLikeFields"][] = "to";
$tdatadespatch[".googleLikeFields"][] = "memono";
$tdatadespatch[".googleLikeFields"][] = "memodate";
$tdatadespatch[".googleLikeFields"][] = "subject";



$tdatadespatch[".tableType"] = "list";

$tdatadespatch[".printerPageOrientation"] = 0;
$tdatadespatch[".nPrinterPageScale"] = 100;

$tdatadespatch[".nPrinterSplitRecords"] = 40;

$tdatadespatch[".geocodingEnabled"] = false;










$tdatadespatch[".pageSize"] = 20;

$tdatadespatch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadespatch[".strOrderBy"] = $tstrOrderBy;

$tdatadespatch[".orderindexes"] = array();

$tdatadespatch[".sqlHead"] = "SELECT `from`,  `to`,  memono,  memodate,  subject";
$tdatadespatch[".sqlFrom"] = "FROM despatch";
$tdatadespatch[".sqlWhereExpr"] = "";
$tdatadespatch[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadespatch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadespatch[".arrGroupsPerPage"] = $arrGPP;

$tdatadespatch[".highlightSearchResults"] = true;

$tableKeysdespatch = array();
$tableKeysdespatch[] = "memono";
$tdatadespatch[".Keys"] = $tableKeysdespatch;


$tdatadespatch[".hideMobileList"] = array();




//	from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "from";
	$fdata["GoodName"] = "from";
	$fdata["ownerTable"] = "despatch";
	$fdata["Label"] = GetFieldLabel("despatch","from");
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


	$tdatadespatch["from"] = $fdata;
		$tdatadespatch[".searchableFields"][] = "from";
//	to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "to";
	$fdata["GoodName"] = "to";
	$fdata["ownerTable"] = "despatch";
	$fdata["Label"] = GetFieldLabel("despatch","to");
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


	$tdatadespatch["to"] = $fdata;
		$tdatadespatch[".searchableFields"][] = "to";
//	memono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "memono";
	$fdata["GoodName"] = "memono";
	$fdata["ownerTable"] = "despatch";
	$fdata["Label"] = GetFieldLabel("despatch","memono");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "memono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "memono";

	
	
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


	$tdatadespatch["memono"] = $fdata;
		$tdatadespatch[".searchableFields"][] = "memono";
//	memodate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "memodate";
	$fdata["GoodName"] = "memodate";
	$fdata["ownerTable"] = "despatch";
	$fdata["Label"] = GetFieldLabel("despatch","memodate");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "memodate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "memodate";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatadespatch["memodate"] = $fdata;
		$tdatadespatch[".searchableFields"][] = "memodate";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "despatch";
	$fdata["Label"] = GetFieldLabel("despatch","subject");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject";

	
	
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


	$tdatadespatch["subject"] = $fdata;
		$tdatadespatch[".searchableFields"][] = "subject";


$tables_data["despatch"]=&$tdatadespatch;
$field_labels["despatch"] = &$fieldLabelsdespatch;
$fieldToolTips["despatch"] = &$fieldToolTipsdespatch;
$placeHolders["despatch"] = &$placeHoldersdespatch;
$page_titles["despatch"] = &$pageTitlesdespatch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["despatch"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["despatch"] = array();



	
				$strOriginalDetailsTable="receive";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="receive";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "receive";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["despatch"][0] = $masterParams;
				$masterTablesData["despatch"][0]["masterKeys"] = array();
	$masterTablesData["despatch"][0]["masterKeys"][]="ID";
				$masterTablesData["despatch"][0]["detailKeys"] = array();
	$masterTablesData["despatch"][0]["detailKeys"][]="ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_despatch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`from`,  `to`,  memono,  memodate,  subject";
$proto0["m_strFrom"] = "FROM despatch";
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
	"m_strName" => "from",
	"m_strTable" => "despatch",
	"m_srcTableName" => "despatch"
));

$proto6["m_sql"] = "`from`";
$proto6["m_srcTableName"] = "despatch";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "to",
	"m_strTable" => "despatch",
	"m_srcTableName" => "despatch"
));

$proto8["m_sql"] = "`to`";
$proto8["m_srcTableName"] = "despatch";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "memono",
	"m_strTable" => "despatch",
	"m_srcTableName" => "despatch"
));

$proto10["m_sql"] = "memono";
$proto10["m_srcTableName"] = "despatch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "memodate",
	"m_strTable" => "despatch",
	"m_srcTableName" => "despatch"
));

$proto12["m_sql"] = "memodate";
$proto12["m_srcTableName"] = "despatch";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "despatch",
	"m_srcTableName" => "despatch"
));

$proto14["m_sql"] = "subject";
$proto14["m_srcTableName"] = "despatch";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "despatch";
$proto17["m_srcTableName"] = "despatch";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "from";
$proto17["m_columns"][] = "to";
$proto17["m_columns"][] = "memono";
$proto17["m_columns"][] = "memodate";
$proto17["m_columns"][] = "subject";
$proto17["m_columns"][] = "mode";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "despatch";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "despatch";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="despatch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_despatch = createSqlQuery_despatch();


	
		;

					

$tdatadespatch[".sqlquery"] = $queryData_despatch;

$tableEvents["despatch"] = new eventsBase;
$tdatadespatch[".hasEvents"] = false;

?>