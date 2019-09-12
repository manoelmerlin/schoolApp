<?php
  require_once('tcpdf.php');
  class MyPDF extends tcpdf
  {
    public function setInfo($date = null, $name = null, $sex = null, $age = null, $process = null, $idioma = 'por', $type = null, $profi = null, $embarque = null)
    {
      $this->data->date = $date;
      $this->data->name = $name;
      $this->data->sex = $sex;
      $this->data->age = $age;
      $this->data->process = $process;
      $this->data->idioma = $idioma;
      $this->data->profi = $profi;
      $this->data->embarque = $embarque;
      $this->data->type = $type;
      if($this->data->idioma == 'por')
      {
        $this->data->_date = 'Data da Coleta';
        $this->data->_name = 'Nome';
        $this->data->_sex = 'Sexo';
        $this->data->_age = 'Idade';
        $this->data->_process = 'Processo';
        $this->data->_profi = 'Função';
        $this->data->_embarque = 'Embarque';
      }
      elseif($this->data->idioma == 'eng')
      {
        $this->data->_date = 'Collect Date';
        $this->data->_name = 'Name';
        $this->data->_sex = 'Sex';
        $this->data->_age = 'Age';
        $this->data->_process = 'Process';
        $this->data->_profi = 'Function';
        $this->data->_embarque = 'Shipment';
      }
      else
      {
        $this->data->_date = 'Data da Coleta';
        $this->data->_name = 'Nome';
        $this->data->_sex = 'Sexo';
        $this->data->_age = 'Idade';
        $this->data->_process = 'Processo';
        $this->data->_profi = 'Função';
        $this->data->_embarque = 'Embarque';
      }
    }
    public function Header()
    {
      $this->SetFont('helvetica', '', 8);
      $tripInformation = '';
      if($this->data->type == 2){
        $tripInformation = '
          <tr>
            <td style="text-align: right;">' . $this->data->_profi . ': </td>
            <td style="text-align: left;"> ' . $this->data->profi . '</td>
          </tr>
          <tr>
            <td style="text-align: right;">' .  $this->data->_embarque . ': </td>
            <td style="text-align: left;"> ' . $this->data->embarque . ' </td>
          </tr>
        ';
      }
      $txt_header ='
      <div style="width: 100%; float: left;">
        <table >
          <tr>
            <td style=" ">
              <img src="img/samplemed.jpg" width="150px" />
            </td>
            <td style=" margin-left: 20px;">
              <table>
                <tr>
                  <td style="text-align: right;">' . $this->data->_date . ': </td>
                  <td style="text-align: left;"> ' . $this->data->date . '</td>
                </tr>
                <tr>
                  <td style="text-align: right;">' .  $this->data->_name . ': </td>
                  <td style="text-align: left;"> ' . $this->data->name . ' </td>
                </tr>
                <tr>
                  <td style="text-align: right;">' . $this->data->_sex . ': </td>
                  <td style="text-align: left;"> ' . $this->data->sex . '</td>
                </tr>
                <tr>
                  <td style="text-align: right;">' . $this->data->_age . ': </td>
                  <td style="text-align: left;"> ' . $this->data->age . '</td>
                </tr>
                '.$tripInformation.'
                <tr>
                  <td style="text-align: right;">Dr.(a): </td>
                  <td style="text-align: left;"> Dr Jairo Waitman </td>
                </tr>
                <tr>
                  <td style="text-align: right;">'. $this->data->_process . ' Nº: </td>
                  <td style="text-align: left;"> ' . $this->data->process . '</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
      ';
      $this->writeHTML( $txt_header, true, flase, flase, false, '');
    }
    public function Footer()
    {
    $this->SetFont('helvetica', '', 8);
    $txt_footer ='
    <div >
      <img src="img/assinatura_rodape.png" width="1500" height="270"  />
    </div>
    ';
    $this->writeHTML( $txt_footer, true, flase, flase, false, '');
    }
  }
?>
