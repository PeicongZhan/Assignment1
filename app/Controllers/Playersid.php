<?php
 namespace App\Controllers;

 class Playersid extends BaseController
 {
 public function index()
 {
     // connect to the model
 $places = new \App\Models\Playersinfo();
 // retrieve all the records
     $records = $places->findAll();
 
  $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $displayHeadings = array_slice($headings, 1,2);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        foreach ($records as $record) {
            $nameLink = anchor("playersid/showme/$record->id");
            $table->addRow($record->name,"<img src=\"/image/".$record->image."\"/>",$nameLink);
        }

        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
            
        ];
        $fields = [
            'title' => 'Lakers championship!!!',
            'heading' => 'Six core members',
            'footer' => 'Copyright Peicong Zhan'
        ];
        $table->setTemplate($template);

        
 
 
 // get a template parser
 $parser = \Config\Services::parser();
        return $parser->setData($fields)
                ->render('templates\top') .
                $table->generate() .
                $parser->setData($fields)
                ->render('templates\bottom');
 }
 
 public function showme($id)
 {
     // connect to the model
 $places = new \App\Models\Playersinfo();
 // retrieve all the records
 $record = $places->find($id);
 
    $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $table->addRow($headings[0], $record['id'])
                ->addRow($headings[1], $record['name'])
                ->addRow($headings[2], "<img src=\"/image/".$record['image']."\"/>")
                ->addRow($headings[3], $record['birth'])
                ->addRow($headings[4], $record['height'])
                ->addRow($headings[5], $record['weight'])
                ->addRow($headings[6], $record['nationality'])
                ->addRow($headings[7], $record['team'])
                ->addRow($headings[8], $record['achievements']);
        
               

        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        

        $fields = [
            'title' => 'Lakers !',
            'heading' => 'player',
            'footer' => 'Copyright Peicong Zhan'
        ];
        $table->setTemplate($template);
 
 // get a template parser
 $parser = \Config\Services::parser();
        return $parser->setData($fields)
                ->render('templates\top') .
                $table->generate() .
                $parser->setData($fields)
                ->render('templates\bottom');
 }
 }
