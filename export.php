<?php
function export_coll($db,$name)
{
	$collection=$db->getCollection($name);
	return $collection;
}

function export_data($collection,$name)
{
	$list = $collection->find();
	while($document = $list->getNext())
	{
		if($document["name"]==$name) return $document;
	}
}
?>
