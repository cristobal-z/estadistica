SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'A') - count(sex
) niños, (select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'A' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 1 and gru = 'A' and cdt_esc = '05DPR0505I' union


SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'B') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'B' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 1 and gru = 'B' and cdt_esc = '05DPR0505I' union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'A') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'A' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 2 and gru = 'A' and cdt_esc = '05DPR0505I'
group by gra asc  union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'B') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 2 and gru = 'B' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 2 and gru = 'B' union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'A') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'A' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 3 and gru = 'A' and cdt_esc = '05DPR0505I' union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'B') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 3 and gru = 'B' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 3 and gru = 'B' and cdt_esc = '05DPR0505I' union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'A') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'A' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 4 and gru = 'A' and cdt_esc = '05DPR0505I' union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'B') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 4 and gru = 'B' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 4 and gru = 'B' and cdt_esc = '05DPR0505I' union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'A') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'A' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 5 and gru = 'A' and cdt_esc = '05DPR0505I' union

SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'B') - count(sex
) niños,(select count(*) FROM estadistica.altas_alumnos where gra = 5 and gru = 'B' and cdt_esc = '05DPR0505I')
Total  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 5 and gru = 'B' and cdt_esc = '05DPR0505I'
;





$pdf->SetXY(45,139);
$pdf->Cell(25,7,utf8_decode(''." "),0,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);

$pdf->SetXY(45,146);
$pdf->Cell(25,14,utf8_decode('SEGUNDO'." "),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);
$pdf->SetXY(45,153);
$pdf->Cell(25,7,utf8_decode(''." "),0,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);

$pdf->SetXY(45,160);
$pdf->Cell(25,14,utf8_decode('TERCERO'." "),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);
$pdf->SetXY(45,167);
$pdf->Cell(25,7,utf8_decode(''." "),0,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);

$pdf->SetXY(45,174);
$pdf->Cell(25,14,utf8_decode('CUARTO'." "),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);
$pdf->SetXY(45,181);
$pdf->Cell(25,7,utf8_decode(''." "),0,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);

$pdf->SetXY(45,188);
$pdf->Cell(25,14,utf8_decode('QUINTO'." "),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);
$pdf->SetXY(45,195);
$pdf->Cell(25,7,utf8_decode(''." "),0,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);

$pdf->SetXY(45,202);
$pdf->Cell(25,14,utf8_decode('SEXTO'." "),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);
$pdf->SetXY(45,209);
$pdf->Cell(25,7,utf8_decode(''." "),0,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['grupo']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Ninas']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['ninos']),1,0,'C',0);
$pdf->Cell(25,7,utf8_decode($fila['Total']),1,1,'C',0);
