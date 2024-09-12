<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl9_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl9_argument'}->checkFilter('number');
${'module_srl9_argument'}->createConditionValue();
if(!${'module_srl9_argument'}->isValid()) return ${'module_srl9_argument'}->getErrorMessage();
} else
${'module_srl9_argument'} = NULL;if(${'module_srl9_argument'} !== null) ${'module_srl9_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl10_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl10_argument'}->checkFilter('number');
${'exclude_module_srl10_argument'}->createConditionValue();
if(!${'exclude_module_srl10_argument'}->isValid()) return ${'exclude_module_srl10_argument'}->getErrorMessage();
} else
${'exclude_module_srl10_argument'} = NULL;if(${'exclude_module_srl10_argument'} !== null) ${'exclude_module_srl10_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl11_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl11_argument'}->createConditionValue();
if(!${'category_srl11_argument'}->isValid()) return ${'category_srl11_argument'}->getErrorMessage();
} else
${'category_srl11_argument'} = NULL;if(${'category_srl11_argument'} !== null) ${'category_srl11_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice12_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice12_argument'}->createConditionValue();
if(!${'s_is_notice12_argument'}->isValid()) return ${'s_is_notice12_argument'}->getErrorMessage();
} else
${'s_is_notice12_argument'} = NULL;if(${'s_is_notice12_argument'} !== null) ${'s_is_notice12_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl13_argument'}->checkFilter('number');
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');
if(isset($args->member_srls)) {
${'member_srls14_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls14_argument'}->checkFilter('number');
${'member_srls14_argument'}->createConditionValue();
if(!${'member_srls14_argument'}->isValid()) return ${'member_srls14_argument'}->getErrorMessage();
} else
${'member_srls14_argument'} = NULL;if(${'member_srls14_argument'} !== null) ${'member_srls14_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList15_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList15_argument'}->createConditionValue();
if(!${'statusList15_argument'}->isValid()) return ${'statusList15_argument'}->getErrorMessage();
} else
${'statusList15_argument'} = NULL;if(${'statusList15_argument'} !== null) ${'statusList15_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division16_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division16_argument'}->createConditionValue();
if(!${'division16_argument'}->isValid()) return ${'division16_argument'}->getErrorMessage();
} else
${'division16_argument'} = NULL;if(${'division16_argument'} !== null) ${'division16_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division17_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division17_argument'}->createConditionValue();
if(!${'last_division17_argument'}->isValid()) return ${'last_division17_argument'}->getErrorMessage();
} else
${'last_division17_argument'} = NULL;if(${'last_division17_argument'} !== null) ${'last_division17_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title18_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title18_argument'}->createConditionValue();
if(!${'s_title18_argument'}->isValid()) return ${'s_title18_argument'}->getErrorMessage();
} else
${'s_title18_argument'} = NULL;if(${'s_title18_argument'} !== null) ${'s_title18_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content19_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content19_argument'}->createConditionValue();
if(!${'s_content19_argument'}->isValid()) return ${'s_content19_argument'}->getErrorMessage();
} else
${'s_content19_argument'} = NULL;if(${'s_content19_argument'} !== null) ${'s_content19_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name20_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name20_argument'}->createConditionValue();
if(!${'s_user_name20_argument'}->isValid()) return ${'s_user_name20_argument'}->getErrorMessage();
} else
${'s_user_name20_argument'} = NULL;if(${'s_user_name20_argument'} !== null) ${'s_user_name20_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id21_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id21_argument'}->createConditionValue();
if(!${'s_user_id21_argument'}->isValid()) return ${'s_user_id21_argument'}->getErrorMessage();
} else
${'s_user_id21_argument'} = NULL;if(${'s_user_id21_argument'} !== null) ${'s_user_id21_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name22_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name22_argument'}->createConditionValue();
if(!${'s_nick_name22_argument'}->isValid()) return ${'s_nick_name22_argument'}->getErrorMessage();
} else
${'s_nick_name22_argument'} = NULL;if(${'s_nick_name22_argument'} !== null) ${'s_nick_name22_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address23_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address23_argument'}->createConditionValue();
if(!${'s_email_address23_argument'}->isValid()) return ${'s_email_address23_argument'}->getErrorMessage();
} else
${'s_email_address23_argument'} = NULL;if(${'s_email_address23_argument'} !== null) ${'s_email_address23_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage24_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage24_argument'}->createConditionValue();
if(!${'s_homepage24_argument'}->isValid()) return ${'s_homepage24_argument'}->getErrorMessage();
} else
${'s_homepage24_argument'} = NULL;if(${'s_homepage24_argument'} !== null) ${'s_homepage24_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags25_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags25_argument'}->createConditionValue();
if(!${'s_tags25_argument'}->isValid()) return ${'s_tags25_argument'}->getErrorMessage();
} else
${'s_tags25_argument'} = NULL;if(${'s_tags25_argument'} !== null) ${'s_tags25_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl26_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl26_argument'}->createConditionValue();
if(!${'s_member_srl26_argument'}->isValid()) return ${'s_member_srl26_argument'}->getErrorMessage();
} else
${'s_member_srl26_argument'} = NULL;if(${'s_member_srl26_argument'} !== null) ${'s_member_srl26_argument'}->setColumnType('number');
if(isset($args->s_member_srls)) {
${'s_member_srls27_argument'} = new ConditionArgument('s_member_srls', $args->s_member_srls, 'in');
${'s_member_srls27_argument'}->createConditionValue();
if(!${'s_member_srls27_argument'}->isValid()) return ${'s_member_srls27_argument'}->getErrorMessage();
} else
${'s_member_srls27_argument'} = NULL;if(${'s_member_srls27_argument'} !== null) ${'s_member_srls27_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count28_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count28_argument'}->createConditionValue();
if(!${'s_readed_count28_argument'}->isValid()) return ${'s_readed_count28_argument'}->getErrorMessage();
} else
${'s_readed_count28_argument'} = NULL;if(${'s_readed_count28_argument'} !== null) ${'s_readed_count28_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count29_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count29_argument'}->createConditionValue();
if(!${'s_voted_count29_argument'}->isValid()) return ${'s_voted_count29_argument'}->getErrorMessage();
} else
${'s_voted_count29_argument'} = NULL;if(${'s_voted_count29_argument'} !== null) ${'s_voted_count29_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count30_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count30_argument'}->createConditionValue();
if(!${'s_blamed_count30_argument'}->isValid()) return ${'s_blamed_count30_argument'}->getErrorMessage();
} else
${'s_blamed_count30_argument'} = NULL;if(${'s_blamed_count30_argument'} !== null) ${'s_blamed_count30_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count31_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count31_argument'}->createConditionValue();
if(!${'s_comment_count31_argument'}->isValid()) return ${'s_comment_count31_argument'}->getErrorMessage();
} else
${'s_comment_count31_argument'} = NULL;if(${'s_comment_count31_argument'} !== null) ${'s_comment_count31_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count32_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count32_argument'}->createConditionValue();
if(!${'s_trackback_count32_argument'}->isValid()) return ${'s_trackback_count32_argument'}->getErrorMessage();
} else
${'s_trackback_count32_argument'} = NULL;if(${'s_trackback_count32_argument'} !== null) ${'s_trackback_count32_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count33_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count33_argument'}->createConditionValue();
if(!${'s_uploaded_count33_argument'}->isValid()) return ${'s_uploaded_count33_argument'}->getErrorMessage();
} else
${'s_uploaded_count33_argument'} = NULL;if(${'s_uploaded_count33_argument'} !== null) ${'s_uploaded_count33_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate34_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate34_argument'}->createConditionValue();
if(!${'s_regdate34_argument'}->isValid()) return ${'s_regdate34_argument'}->getErrorMessage();
} else
${'s_regdate34_argument'} = NULL;if(${'s_regdate34_argument'} !== null) ${'s_regdate34_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update35_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update35_argument'}->createConditionValue();
if(!${'s_last_update35_argument'}->isValid()) return ${'s_last_update35_argument'}->getErrorMessage();
} else
${'s_last_update35_argument'} = NULL;if(${'s_last_update35_argument'} !== null) ${'s_last_update35_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress36_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress36_argument'}->createConditionValue();
if(!${'s_ipaddress36_argument'}->isValid()) return ${'s_ipaddress36_argument'}->getErrorMessage();
} else
${'s_ipaddress36_argument'} = NULL;if(${'s_ipaddress36_argument'} !== null) ${'s_ipaddress36_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date37_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date37_argument'}->createConditionValue();
if(!${'start_date37_argument'}->isValid()) return ${'start_date37_argument'}->getErrorMessage();
} else
${'start_date37_argument'} = NULL;if(${'start_date37_argument'} !== null) ${'start_date37_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date38_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date38_argument'}->createConditionValue();
if(!${'end_date38_argument'}->isValid()) return ${'end_date38_argument'}->getErrorMessage();
} else
${'end_date38_argument'} = NULL;if(${'end_date38_argument'} !== null) ${'end_date38_argument'}->setColumnType('date');

${'page41_argument'} = new Argument('page', $args->{'page'});
${'page41_argument'}->ensureDefaultValue('1');
if(!${'page41_argument'}->isValid()) return ${'page41_argument'}->getErrorMessage();

${'page_count42_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count42_argument'}->ensureDefaultValue('10');
if(!${'page_count42_argument'}->isValid()) return ${'page_count42_argument'}->getErrorMessage();

${'list_count43_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count43_argument'}->ensureDefaultValue('20');
if(!${'list_count43_argument'}->isValid()) return ${'list_count43_argument'}->getErrorMessage();

${'sort_index39_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index39_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index39_argument'}->isValid()) return ${'sort_index39_argument'}->getErrorMessage();

${'order_type40_argument'} = new SortArgument('order_type40', $args->order_type);
${'order_type40_argument'}->ensureDefaultValue('asc');
if(!${'order_type40_argument'}->isValid()) return ${'order_type40_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl9_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl10_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl11_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice12_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl13_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls14_argument,"in", 'and')
,new ConditionWithArgument('`status`',$statusList15_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division16_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division17_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title18_argument,"like")
,new ConditionWithArgument('`content`',$s_content19_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name20_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id21_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name22_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address23_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage24_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags25_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl26_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srls27_argument,"in", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count28_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count29_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count30_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count31_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count32_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count33_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate34_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update35_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress36_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date37_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date38_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index39_argument'}, $order_type40_argument)
));
$query->setLimit(new Limit(${'list_count43_argument'}, ${'page41_argument'}, ${'page_count42_argument'}));
return $query; ?>