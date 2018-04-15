<!doctype html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:2.html');
}
?>
<a href="logout.php">Logout</a>
<style>
h1 {
color:purple;
text-align:center;
font-family: courier;
}
</style>
</head>
<body>
<h1>The Odyssey by Homer</h1>
<img src="theodysseyofhomer.jpg"  alt="inferno" style="display:inline-block; border:10px solid white; float:left;width:300px;height:300px;">
<p>The Odyssey  is one of two major ancient Greek epic poems attributed to Homer. It is, in part, a sequel to the Iliad, the other
 work ascribed to Homer. The poem is fundamental to the modern Western canon, and is the second oldest extant work of Western literature,
 the Iliad being the oldest. Scholars believe it was composed near the end of the 8th century BC, somewhere in Ionia, the Greek coastal
 region of Anatolia.The poem mainly focuses on the Greek hero Odysseus (known as Ulysses in Roman myths) and his journey home after the 
 fall of Troy. It takes Odysseus ten years to reach Ithaca after the ten-year Trojan War. In his absence, it is assumed he has died,
 and his wife Penelope and son Telemachus must deal with a group of unruly suitors, the Mnesteres or Proci, who compete 
 for Penelope's hand in marriage.It continues to be read in the Homeric Greek and translated into modern languages around the world. Many 
 scholars believe that the original poem was composed in an oral tradition by an aoidos (epic poet/singer), perhaps a rhapsode (professional 
 performer), and was more likely intended to be heard than read. The details of the ancient oral performance, and the story's conversion to
 a written work inspire continual debate among scholars. The Odyssey was written in a poetic dialect of Greek—a literary amalgam of Aeolic Greek,
 Ionic Greek, and other Ancient Greek dialects—and comprises 12,110 lines of dactylic hexameter. Among the most noteworthy elements of the 
 text are its non-linear plot, and the influence on events of choices made by women and slaves, besides the actions of fighting men. In the English 
 language as well as many others, the word odyssey has come to refer to an epic voyage.The Odyssey has a lost sequel, the Telegony, which was no
 written by Homer. It was usually attributed in antiquity to Cinaethon of Sparta. In one source, the Telegony was said to have been stolen from
 Musaeus by Eugamon or Eugammon of Cyrene (see Cyclic poets).</p>
 </body>
 </html>