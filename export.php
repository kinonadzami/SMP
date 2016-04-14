<?php
function export_coll($db,$name)
{
	$collection=$db->conectCollections($name);
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
