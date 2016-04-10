<?php
function export_coll($db)
{
	$list=$db->listCollections();
	foreach ($list as $collection) 
	{
		echo "<p>" . $collection . "</p>";
	}
	return $list;
}

function export_data($collection)
{
	$list = $collection->find();
	while($document = $list->getNext())
	{
		echo "<p> Name:" . $document["name"] . "</br>";
		echo "Age:" . $document["age"] . "</p>";
	}
	return $list;
}
?>