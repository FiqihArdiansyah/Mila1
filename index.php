<html>
    <head>
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Npm</th>
                <th>Nama</th>
                <th>Ujian</th>
                <th>Keterangan</th>
            </tr>
            <?php
                $data_mhs = array(
                    array(
                        'Npm' =>'1',
                        'Nama' =>'fiqih',
                        'Ujian' =>'90'
                ),
                array(
                    'Npm' =>'2',
                    'Nama' =>'fiqih',
                    'Ujian' =>'80'
                ),
                array(
                    'Npm' =>'3',
                    'Nama' =>'fiqih',
                    'Ujian' =>'60'
                ),
                array(
                    'Npm' =>'4',
                    'Nama' =>'fiqih',
                    'Ujian' =>'50'
                ),
            );

            ?>
            
            <?php foreach ($data_mhs as $key) {
                $ket=''; 
                if($key['Ujian']<=50){
                    $ket ='D';
                }elseif($key['Ujian']>50 && $key['Ujian']<=70){
                    $ket = 'C';
                }elseif($key['Ujian']>70 && $key['Ujian']<=80){
                    $ket = 'B';
                }   else{
                    $ket = 'A';
                }
                    
                ?>
                
                <tr>
                    <td><?php echo $key['Npm'];?></td>
                    <td><?php echo $key['Nama'];?></td>
                    <td><?php echo $key['Ujian'];?></td>
                    <td><?php echo $ket;?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
