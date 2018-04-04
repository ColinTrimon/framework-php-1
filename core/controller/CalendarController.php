<?php

require(ROOT . "model/calendarModel.php");

function index(){
	$calendars = getAllPersons();

    render("calendar/index", array(
        'calendar' => $calendars)
    );
}

function edit($id){
	$calendar = getID($id);

    render("calendar/edit", array(
      "calendar" => $calendar));
}

function create(){
	$calendar = getAllPersons($id);
	render("calendar/create", array(
	"calendar" => $calendar));
}

function delete($id){
	$calendar = getID($id);
	render("calendar/delete", array(
		"calendar" => $calendar
	));
}

function deleteSave($id){
	if (deleteBirthday($id)) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		//er is iets fout gegaan..
		//header("location:" . URL . "error/error_delete");
		exit();
	}
}

function createSave(){
	if (createBirthday()) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db");
		exit();
	}
}

function editBirth($id){
	if (editBirthday($id)) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}
