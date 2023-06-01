<?php



$tdatareceive = array();
$tdatareceive[".searchableFields"] = array();
$tdatareceive[".ShortName"] = "receive";
$tdatareceive[".OwnerID"] = "";
$tdatareceive[".OriginalTable"] = "receive";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatareceive[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatareceive[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatareceive[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsreceive = array();
$fieldToolTipsreceive = array();
$pageTitlesreceive = array();
$placeHoldersreceive = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreceive["English"] = array();
	$fieldToolTipsreceive["English"] = array();
	$placeHoldersreceive["English"] = array();
	$pageTitlesreceive["English"] = array();
	$fieldLabelsreceive["English"]["from"] = "From";
	$fieldToolTipsreceive["English"]["from"] = "";
	$placeHoldersreceive["English"]["from"] = "";
	$fieldLabelsreceive["English"]["to"] = "To";
	$fieldToolTipsreceive["English"]["to"] = "";
	$placeHoldersreceive["English"]["to"] = "";
	$fieldLabelsreceive["English"]["subject"] = "Subject";
	$fieldToolTipsreceive["English"]["subject"] = "";
	$placeHoldersreceive["English"]["subject"] = "";
	$fieldLabelsreceive["English"]["memono"] = "Memo No";
	$fieldToolTipsreceive["English"]["memono"] = "";
	$placeHoldersreceive["English"]["memono"] = "";
	$fieldLabelsreceive["English"]["memodate"] = "Memo Date";
	$fieldToolTipsreceive["English"]["memodate"] = "";
	$placeHoldersreceive["English"]["memodate"] = "";
	$fieldLabelsreceive["English"]["receiveno"] = "Receive No";
	$fieldToolTipsreceive["English"]["receiveno"] = "";
	$placeHoldersreceive["English"]["receiveno"] = "";
	$fieldLabelsreceive["English"]["receivedate"] = "Receive Date";
	$fieldToolTipsreceive["English"]["receivedate"] = "";
	$placeHoldersreceive["English"]["receivedate"] = "";
	$fieldLabelsreceive["English"]["remarks"] = "Remarks";
	$fieldToolTipsreceive["English"]["remarks"] = "";
	$placeHoldersreceive["English"]["remarks"] = "";
	$pageTitlesreceive["English"]["search"] = "Receive, Advanced search";
	if (count($fieldToolTipsreceive["English"]))
		$tdatareceive[".isUseToolTips"] = true;
}


	$tdatareceive[".NCSearch"] = true;



$tdatareceive[".shortTableName"] = "receive";
$tdatareceive[".nSecOptions"] = 0;

$tdatareceive[".mainTableOwnerID"] = "";
$tdatareceive[".entityType"] = 0;

$tdatareceive[".strOriginalTableName"] = "receive";

	



$tdatareceive[".showAddInPopup"] = false;

$tdatareceive[".showEditInPopup"] = false;

$tdatareceive[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareceive[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareceive[".listAjax"] = false;
//	temporary
$tdatareceive[".listAjax"] = false;

	$tdatareceive[".audit"] = false;

	$tdatareceive[".locking"] = false;


$pages = $tdatareceive[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareceive[".edit"] = true;
	$tdatareceive[".afterEditAction"] = 1;
	$tdatareceive[".closePopupAfterEdit"] = 1;
	$tdatareceive[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareceive[".add"] = true;
$tdatareceive[".afterAddAction"] = 1;
$tdatareceive[".closePopupAfterAdd"] = 1;
$tdatareceive[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareceive[".list"] = true;
}



$tdatareceive[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareceive[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareceive[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareceive[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareceive[".printFriendly"] = true;
}



$tdatareceive[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareceive[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareceive[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareceive[".isUseAjaxSuggest"] = true;

$tdatareceive[".rowHighlite"] = true;





$tdatareceive[".ajaxCodeSnippetAdded"] = false;

$tdatareceive[".buttonsAdded"] = false;

$tdatareceive[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareceive[".isUseTimeForSearch"] = false;


$tdatareceive[".badgeColor"] = "cd853f";


$tdatareceive[".allSearchFields"] = array();
$tdatareceive[".filterFields"] = array();
$tdatareceive[".requiredSearchFields"] = array();

$tdatareceive[".googleLikeFields"] = array();
$tdatareceive[".googleLikeFields"][] = "from";
$tdatareceive[".googleLikeFields"][] = "to";
$tdatareceive[".googleLikeFields"][] = "subject";
$tdatareceive[".googleLikeFields"][] = "memono";
$tdatareceive[".googleLikeFields"][] = "memodate";
$tdatareceive[".googleLikeFields"][] = "receiveno";
$tdatareceive[".googleLikeFields"][] = "receivedate";
$tdatareceive[".googleLikeFields"][] = "remarks";



$tdatareceive[".tableType"] = "list";

$tdatareceive[".printerPageOrientation"] = 0;
$tdatareceive[".nPrinterPageScale"] = 100;

$tdatareceive[".nPrinterSplitRecords"] = 40;

$tdatareceive[".geocodingEnabled"] = false;




$tdatareceive[".isDisplayLoading"] = true;






$tdatareceive[".pageSize"] = 20;

$tdatareceive[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareceive[".strOrderBy"] = $tstrOrderBy;

$tdatareceive[".orderindexes"] = array();

$tdatareceive[".sqlHead"] = "SELECT `from`,  `to`,  subject,  memono,  memodate,  receiveno,  receivedate,  remarks";
$tdatareceive[".sqlFrom"] = "FROM receive";
$tdatareceive[".sqlWhereExpr"] = "";
$tdatareceive[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareceive[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareceive[".arrGroupsPerPage"] = $arrGPP;

$tdatareceive[".highlightSearchResults"] = true;

$tableKeysreceive = array();
$tableKeysreceive[] = "memono";
$tableKeysreceive[] = "receiveno";
$tdatareceive[".Keys"] = $tableKeysreceive;


$tdatareceive[".hideMobileList"] = array();




//	from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "from";
	$fdata["GoodName"] = "from";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","from");
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


	$tdatareceive["from"] = $fdata;
		$tdatareceive[".searchableFields"][] = "from";
//	to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "to";
	$fdata["GoodName"] = "to";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","to");
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


	$tdatareceive["to"] = $fdata;
		$tdatareceive[".searchableFields"][] = "to";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","subject");
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


	$tdatareceive["subject"] = $fdata;
		$tdatareceive[".searchableFields"][] = "subject";
//	memono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "memono";
	$fdata["GoodName"] = "memono";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","memono");
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


	$tdatareceive["memono"] = $fdata;
		$tdatareceive[".searchableFields"][] = "memono";
//	memodate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "memodate";
	$fdata["GoodName"] = "memodate";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","memodate");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "memodate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "memodate";

	
	
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
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatareceive["memodate"] = $fdata;
		$tdatareceive[".searchableFields"][] = "memodate";
//	receiveno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "receiveno";
	$fdata["GoodName"] = "receiveno";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","receiveno");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "receiveno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "receiveno";

	
	
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


	$tdatareceive["receiveno"] = $fdata;
		$tdatareceive[".searchableFields"][] = "receiveno";
//	receivedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "receivedate";
	$fdata["GoodName"] = "receivedate";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","receivedate");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "receivedate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "receivedate";

	
	
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
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



	
	
	
	
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


	$tdatareceive["receivedate"] = $fdata;
		$tdatareceive[".searchableFields"][] = "receivedate";
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "receive";
	$fdata["Label"] = GetFieldLabel("receive","remarks");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remarks";

	
	
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


	$tdatareceive["remarks"] = $fdata;
		$tdatareceive[".searchableFields"][] = "remarks";


$tables_data["receive"]=&$tdatareceive;
$field_labels["receive"] = &$fieldLabelsreceive;
$fieldToolTips["receive"] = &$fieldToolTipsreceive;
$placeHolders["receive"] = &$placeHoldersreceive;
$page_titles["receive"] = &$pageTitlesreceive;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["receive"] = array();
//	despatch
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="despatch";
		$detailsParam["dOriginalTable"] = "despatch";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "despatch";
	$detailsParam["dCaptionTable"] = GetTableCaption("despatch");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["receive"][$dIndex] = $detailsParam;

	
		$detailsTablesData["receive"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["receive"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["receive"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["receive"][$dIndex]["detailKeys"][]="ID";
//	movement
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="movement";
		$detailsParam["dOriginalTable"] = "movement";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "movement";
	$detailsParam["dCaptionTable"] = GetTableCaption("movement");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["receive"][$dIndex] = $detailsParam;

	
		$detailsTablesData["receive"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["receive"][$dIndex]["masterKeys"][]="memono";

				$detailsTablesData["receive"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["receive"][$dIndex]["detailKeys"][]="receivememo";

// tables which are master tables for current table (detail)
$masterTablesData["receive"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_receive()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`from`,  `to`,  subject,  memono,  memodate,  receiveno,  receivedate,  remarks";
$proto0["m_strFrom"] = "FROM receive";
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
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto6["m_sql"] = "`from`";
$proto6["m_srcTableName"] = "receive";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "to",
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto8["m_sql"] = "`to`";
$proto8["m_srcTableName"] = "receive";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto10["m_sql"] = "subject";
$proto10["m_srcTableName"] = "receive";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "memono",
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto12["m_sql"] = "memono";
$proto12["m_srcTableName"] = "receive";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "memodate",
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto14["m_sql"] = "memodate";
$proto14["m_srcTableName"] = "receive";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "receiveno",
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto16["m_sql"] = "receiveno";
$proto16["m_srcTableName"] = "receive";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "receivedate",
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto18["m_sql"] = "receivedate";
$proto18["m_srcTableName"] = "receive";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "receive",
	"m_srcTableName" => "receive"
));

$proto20["m_sql"] = "remarks";
$proto20["m_srcTableName"] = "receive";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "receive";
$proto23["m_srcTableName"] = "receive";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "from";
$proto23["m_columns"][] = "to";
$proto23["m_columns"][] = "subject";
$proto23["m_columns"][] = "memono";
$proto23["m_columns"][] = "memodate";
$proto23["m_columns"][] = "receiveno";
$proto23["m_columns"][] = "receivedate";
$proto23["m_columns"][] = "remarks";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "receive";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "receive";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="receive";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_receive = createSqlQuery_receive();


	
		;

								

$tdatareceive[".sqlquery"] = $queryData_receive;

$tableEvents["receive"] = new eventsBase;
$tdatareceive[".hasEvents"] = false;

?>