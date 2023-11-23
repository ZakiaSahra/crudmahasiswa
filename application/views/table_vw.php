<?php

$template = array(
    'table_open'             => '<table border="1" cellpadding="4" cellspacing="0">',
    'table_close'            => '</table>'
);

$this->table->set_template($template);
$this->table->set_heading(array('No', 'Nama', 'Alamat'));

$this->table->add_row(array('1', 'budi', 'rumbai'));
$this->table->add_row(array('2', 'badu', 'panam'));
$this->table->add_row(array('3', 'bidi', 'nangka'));

echo $this->table->generate();
?>