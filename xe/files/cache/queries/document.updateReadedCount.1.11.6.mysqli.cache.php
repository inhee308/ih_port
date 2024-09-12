<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateReadedCount");
$query->setAction("update");
$query->setPriority("");

${'readed_count3_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count3_argument'}->setColumnOperation('+');
${'readed_count3_argument'}->ensureDefaultValue(1);
if(!${'readed_count3_argument'}->isValid()) return ${'readed_count3_argument'}->getErrorMessage();
if(${'readed_count3_argument'} !== null) ${'readed_count3_argument'}->setColumnType('number');

${'document_srl4_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl4_argument'}->checkFilter('number');
${'document_srl4_argument'}->checkNotNull();
${'document_srl4_argument'}->createConditionValue();
if(!${'document_srl4_argument'}->isValid()) return ${'document_srl4_argument'}->getErrorMessage();
if(${'document_srl4_argument'} !== null) ${'document_srl4_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`readed_count`', ${'readed_count3_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>