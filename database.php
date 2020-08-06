<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.5
 */

/**
 * Database `library`
 */

/* `library`.`Authors` */
$Authors = array(
  array('author_id' => '147','first_name' => 'Amanda','last_name' => 'Odina','social_security' => '123456789','birthyear' => '1985','author_page' => 'Here is the page.'),
  array('author_id' => '258','first_name' => 'Sammi','last_name' => 'Chen','social_security' => '321654987','birthyear' => '1966','author_page' => 'Here is the page.'),
  array('author_id' => '369','first_name' => 'Zoe','last_name' => 'Spoon','social_security' => '987654321','birthyear' => '1991','author_page' => 'Here is the page.'),
  array('author_id' => '478','first_name' => 'Troy','last_name' => 'Bolton','social_security' => '963852741','birthyear' => '1974','author_page' => 'Here is the page.'),
  array('author_id' => '569','first_name' => 'Lydia','last_name' => 'Martin','social_security' => '741852963','birthyear' => '1976','author_page' => 'Here is the page.'),
  array('author_id' => '632','first_name' => 'Onika','last_name' => 'Maraj','social_security' => '852741963','birthyear' => '1932','author_page' => 'Here is the page.')
);

/* `library`.`Books` */
$Books = array(
  array('book_id' => '123','ISBN' => '963852741','book_title' => 'Book One','total_pages' => '145','edition_number' => '4','year_published' => '2008','unique_barcode' => '963852741','shelf_id' => '963852741','date_added' => '3142008','publishing_company' => 'Amanda\'s Publishing','reserve' => '0'),
  array('book_id' => '234','ISBN' => '987654321','book_title' => 'Book Two','total_pages' => '825','edition_number' => '2','year_published' => '2009','unique_barcode' => '987654321','shelf_id' => '987654321','date_added' => '3142009','publishing_company' => 'Amanda\'s Publishing','reserve' => '0'),
  array('book_id' => '345','ISBN' => '741852963','book_title' => 'Book Three','total_pages' => '357','edition_number' => '1','year_published' => '2013','unique_barcode' => '741852963','shelf_id' => '741852963','date_added' => '3142013','publishing_company' => 'Amanda\'s Publishing','reserve' => '0'),
  array('book_id' => '456','ISBN' => '753869412','book_title' => 'Book Four','total_pages' => '564','edition_number' => '3','year_published' => '2017','unique_barcode' => '753869412','shelf_id' => '753869412','date_added' => '3142017','publishing_company' => 'Amanda\'s Publishing','reserve' => '0'),
  array('book_id' => '567','ISBN' => '159263478','book_title' => 'Book Five','total_pages' => '44','edition_number' => '8','year_published' => '2001','unique_barcode' => '159263478','shelf_id' => '159263478','date_added' => '3142001','publishing_company' => 'Haus of Publishing','reserve' => '0'),
  array('book_id' => '678','ISBN' => '584267913','book_title' => 'Book Six','total_pages' => '88','edition_number' => '1','year_published' => '1972','unique_barcode' => '584267913','shelf_id' => '584267913','date_added' => '3141972','publishing_company' => 'Haus of Publishing','reserve' => '0'),
  array('book_id' => '789','ISBN' => '357689241','book_title' => 'Book Seven','total_pages' => '413','edition_number' => '1','year_published' => '1995','unique_barcode' => '357689241','shelf_id' => '357689241','date_added' => '3141995','publishing_company' => 'Haus of Publishing','reserve' => '0'),
  array('book_id' => '890','ISBN' => '654823791','book_title' => 'Book Eight','total_pages' => '90','edition_number' => '2','year_published' => '2003','unique_barcode' => '654823791','shelf_id' => '654823791','date_added' => '3142003','publishing_company' => 'Haus of Publishing','reserve' => '0'),
  array('book_id' => '901','ISBN' => '456789123','book_title' => 'Book Nine','total_pages' => '120','edition_number' => '2','year_published' => '1956','unique_barcode' => '456789123','shelf_id' => '456789123','date_added' => '3141956','publishing_company' => 'Haus of Publishing','reserve' => '0'),
  array('book_id' => '991','ISBN' => '852963741','book_title' => 'Book Ten','total_pages' => '720','edition_number' => '2','year_published' => '1985','unique_barcode' => '852963741','shelf_id' => '852963741','date_added' => '3141985','publishing_company' => 'Amanda\'s Publishing','reserve' => '0')
);

/* `library`.`book_author` */
$book_author = array(
  array('id' => '101','author_id' => '147','book_id' => '123'),
  array('id' => '201','author_id' => '234','book_id' => '258'),
  array('id' => '301','author_id' => '147','book_id' => '345'),
  array('id' => '401','author_id' => '369','book_id' => '456'),
  array('id' => '501','author_id' => '478','book_id' => '567'),
  array('id' => '601','author_id' => '569','book_id' => '678'),
  array('id' => '701','author_id' => '569','book_id' => '789'),
  array('id' => '801','author_id' => '632','book_id' => '890'),
  array('id' => '901','author_id' => '478','book_id' => '901'),
  array('id' => '1001','author_id' => '147','book_id' => '991')
);

/* `library`.`Gallery` */
$Gallery = array(
  array('imgFile' => 'gallery.5ed6722d79fdc0.85853889.jpg','galleryOrder' => '2','gallery_ID' => '13'),
  array('imgFile' => 'gallery.5ed672312a3bb4.30135025.jpg','galleryOrder' => '3','gallery_ID' => '14'),
  array('imgFile' => 'gallery.5ed67234af1705.63273921.jpg','galleryOrder' => '4','gallery_ID' => '15'),
  array('imgFile' => 'gallery.5ed672388cddc2.37170631.jpg','galleryOrder' => '5','gallery_ID' => '16'),
  array('imgFile' => 'gallery.5ed6723c104f48.79515564.jpg','galleryOrder' => '6','gallery_ID' => '17')
);

/* `library`.`Users` */
$Users = array(
  array('user_ID' => '1','username' => 'admin','password' => 'admin','staff' => '1'),
  array('user_ID' => '2','username' => 'moderator','password' => 'moderator','staff' => '2'),
  array('user_ID' => '36','username' => 'member1','password' => 'member1','staff' => '0'),
  array('user_ID' => '48','username' => 'member2','password' => 'member2','staff' => '0'),
  array('user_ID' => '51','username' => 'member3','password' => 'member3','staff' => '0')
);
