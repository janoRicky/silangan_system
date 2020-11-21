<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php if ($title == NULL): ?>
			<?php echo 'Title'; ?>
		<?php else: ?>
			<?php echo $title; ?>
		<?php endif ?>
	</title>
	
	<!-- if color is null make it transparent -->
	<style>
		/*INSERT INTO `branch_colors`(`BColorID`, `BranchID`, `Part`, `HexColor`) VALUES 

		('19', 'NavbarBG', '#ff0600'),
		('19', 'NavbarColor', '#ffffff'),
		('19', 'NavbarBorder', '#fffe7e'),

		('19', 'NavbarSideBG', '#ff0600'),
		('19', 'NavbarSideBorder', '#fffe7e'),

		('19', 'SidebarBG', '#ffffff'),
		('19', 'SidebarBorder', '#fffe7e'),

		('19', 'SideLinkBG', '#ffffff'),
		('19', 'SideLinkColor', '#000000'),
		('19', 'SideLinkBorder', '#fffe7e'),

		('19', 'MainBG', '#ffffff'),

		('19', 'WindowsBG', '#ffffff'),
		('19', 'WindowsBorder', '#fffe7e'),

		('19', 'TableBG', '#ffffff'),
		('19', 'TableColor', '#000000'),
		('19', 'TableBorder', '#fffea9'),

		('19', 'TabsBG', '#fcfcfc'),
		('19', 'TabsLinkColor', '#545429'),
		('19', 'TabsActiveColor', '#272713'),
		('19', 'TabsBorder', '#fffe7e'),

		('19', 'ButtonBG', '#ff4b49'),
		('19', 'ButtonColor', '#ffffff'),
		('19', 'ButtonBorder', '#ffffff'),
		('19', 'ButtonHover', '#ff0600'),

		('19', 'ProgressRemaining', '#ff2f2b'),
		('19', 'ProgressBar', '#ff4b49'),

		('19', 'PageNoBG', '#ffffff'),
		('19', 'PageNoColor', '#537468'),

		('19', 'PageNoActiveBG', '#ff4b49'),
		('19', 'PageNoActiveColor', '#ffffff'),
		('19', 'PageNoActiveBorder', '#ffffff'),

		('19', 'HeadColor', '#272713')*/
		:root {
			<?php
			$Colors = $_SESSION['Colors'];
			foreach ($Colors as $row) {
				echo "--" . $row["Part"] . ":" . $row["HexColor"] . ";";
			}
			?>
		}
	</style>

	<!-- BOOTSTRAP -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/dataTables.bootstrap4.min.css">
	<!-- FONTAWESOME -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/all.css">
	<!-- CUSTOM LIBRARIES -->
	<!-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet"> -->
	<link href="<?=base_url()?>assets/css/bootstrap4-toggle.min.css" rel="stylesheet">
	<!-- CUSTOM STYLE -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
	<link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">

</head>