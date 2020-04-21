<?php
/********************************************************************************* 
 *  This file is part of Sentrifugo.
 *  Copyright (C) 2014 Sapplica
 *   
 *  Sentrifugo is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Sentrifugo is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Sentrifugo.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Sentrifugo Support <support@sentrifugo.com>
 ********************************************************************************/

class Default_Form_emppersonaldetails extends Zend_Form
{
	public function init()
	{
		$this->setMethod('post');
		
		$this->setAttrib('id', 'formid');
		$this->setAttrib('name', 'emppersonaldetails');
		
		$id = new Zend_Form_Element_Hidden('id');
				
		$userid = new Zend_Form_Element_Hidden('user_id');
				
		$genderid = new Zend_Form_Element_Select('genderid');
		$genderid->addMultiOption('','Select Gender');
    	$genderid->setRegisterInArrayValidator(false);
        //father name
        $fname= new Zend_Form_Element_Text('$fname');
	    $fname->setAttrib('size',5); 
		$fname->setAttrib('maxlength',10);	
    	//mother name
        $mname= new Zend_Form_Element_Text('$mname');
	    $mname->setAttrib('size',5); 
		$mname->setAttrib('maxlength',10);

        $maritalstatusid = new Zend_Form_Element_Select('maritalstatusid');
		$maritalstatusid->addMultiOption('','Select Marital Status');
        $maritalstatusid->setRegisterInArrayValidator(false);        
        //wife name
        $wname= new Zend_Form_Element_Text('$wname');
	    $wname->setAttrib('size',5); 
		$wname->setAttrib('maxlength',10);
 
        //children name
        $cname = new Zend_Form_Element_Select('cname');
		$cname->addMultiOption('','Add Children');
		$cname->setLabel('children');
        $cname->setRegisterInArrayValidator(false);
        
        
        $languageid = new Zend_Form_Element_Select('languageid');
		$languageid->addMultiOption('','Select Language');
		$languageid->setLabel('Language');
        $languageid->setRegisterInArrayValidator(false);
        
	

        $nationalityid = new Zend_Form_Element_Select('nationalityid');
		$nationalityid->addMultiOption('','Select Nationality');
        $nationalityid->setRegisterInArrayValidator(false);

        $dob = new ZendX_JQuery_Form_Element_DatePicker('dob');
		$dob->setOptions(array('class' => 'brdr_none'));	
		$dob->setAttrib('readonly', 'true');
		$dob->setAttrib('onfocus', 'this.blur()');
		//DOB should not be current date....
		
		/*
        $celebrated_dob = new ZendX_JQuery_Form_Element_DatePicker('celebrated_dob');
		$celebrated_dob->setOptions(array('class' => 'brdr_none'));	
		$celebrated_dob->setAttrib('readonly', 'true');
		$celebrated_dob->setAttrib('onfocus', 'this.blur()');
		*/
		
        $bloodgroup = new Zend_Form_Element_Text('bloodgroup ');
        $bloodgroup ->setAttrib('size',5); 
		$bloodgroup ->setAttrib('maxlength',20);	
        
        $bp= new Zend_Form_Element_Text('bp');
        $bp->setAttrib('size',5); 
		$bp->setAttrib('maxlength',20);	
        
   
        $idcn = new Zend_Form_Element_Text('idcn');
        $idcn->setAttrib('size',5); 
		$idcn->setAttrib('maxlength',20);	
        
        $fmcn = new Zend_Form_Element_Text('fmcn');
        $fmcn->setAttrib('size',5); 
		$fmcn->setAttrib('maxlength',20);	
        
        $npcn = new Zend_Form_Element_Text('npcn');
        $npcn->setAttrib('size',5); 
		$npcn->setAttrib('maxlength',20);	
      
        $bpjs= new Zend_Form_Element_Text('bpjs');
       $bpjs->setAttrib('size',5); 
		$bpjs->setAttrib('maxlength',20);	
        
        $bpjsn = new Zend_Form_Element_Text('bpjsn');
        $bpjsn->setAttrib('size',5); 
		$bpjsn->setAttrib('maxlength',20);
    
        
        
        
        
        
        
		/*$submit = new Zend_Form_Element_Submit('submit');
		$submit->setAttrib('id', 'submitbutton');
		$submit->setLabel('Save');*/
		
		$submitadd = new Zend_Form_Element_Button('submitbutton');
		$submitadd->setAttrib('id', 'submitbuttons');
		$submitadd->setAttrib('onclick', 'validatedocumentonsubmit(this)');
		$submitadd->setLabel('Save');
		
		$this->addElements(array($id,$userid,$genderid,$fname,$mname,$maritalstatusid,$wname,$cname,$nationalityid,$languageid,$dob,
                                 $bloodgroup,$bp,$idcn,$fmcn,$npcn,$bpjs,$bpjsn,$submitadd));
        $this->setElementDecorators(array('ViewHelper')); 
 		 $this->setElementDecorators(array(
                    'UiWidgetElement',
        ),array('dob')); 
	}
}