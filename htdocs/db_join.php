<?php
//SELECT a.company, b.room_name, c.dname FROM n_product AS a, n_product_room AS b, ticket_detail AS c WHERE a.no = b.p_no AND b.p_no = c.p_no AND a.chk_view = 'Y' AND a.fgubun != 'R' AND b.tmp_new = 'Y' AND b.room_name != '' AND c.dname != ''
/*

1. 여행사이트 제일 많이 쓰고 제일 기본되는 쿼리																													WHERE (테이블이름).(컬럼이름) (구분자) (검사값)
1번 : reserve_list (예약정보 저장된 테이블)
2번 : pay (결제정보 저장된 테이블)
3번 : n_product (시설정보)
4번 : n_roduct_room(객실정보)
1번 테이블 num 필드값과 2번 테이블 rsv_tnum 필드값은 동일한 값
3번 테이블 no 필드값과 4번 테이블 p_no 필드값은 동일한 값
1번 테이블 p_no필드값과 3번 테이블 no값은 동일한 값

[참고할 데이터]
1번테이블 state필드    - Y : 결제완료 
          pchk필드    - Y : 결제 입금까지 다 끝난상태 (보통 신용카드, 휴대폰)
                        N : 결제 입금 안된 상태
          success필드  - Y : 예약상태 확정 
                        N : 예약상태 대기 
                        C, C2, C3, C4 - 예약상태 취소 
                        R : 예약상태 확정대기
1번 테이블 wdate : 결제일
final_money : 총 금액(할인 후)
sell_price   : 총 금액(할인 전)
2번 테이블 pdate : 결제일
3번 테이블 chk_view : Y – 노출 / N : 비노출
           class_txt : 업체구분


*/
	$result1 = SELECT * FROM reserve_list AS r_l, pay, n_product AS n_p, n_product_room AS n_p_r WHERE r_l.state = 'Y' AND r_l.success_chk = 'Y'
	mysql_query($result, $dbconn);

	$result2 = SELECT pay.wdate, pay.sell_price, pay.sell_final_money FROM  pay WHERE into pay (pay.wdate, pay,sell_price, pay,sell_final_money) VALUES ('xxxx-xx-xx') AND pay.wdate between '2016-05' group by pay.pdate;
	mysql_query($result, $dbconn);

	$result3 = SELECT n_p.company, n_p_r.room_name FROM n_product AS n_p , n_product_room AS n_p_r WHERE n_p.chk_view = 'Y' AND n_p.class_txt = '리조트'
	mysql_query($result,$dbconn)

	$result4 = SELECT LENGTH(n_p.class_txt), n_p.class_txt FROM n_product AS n_p GROUP BY n_p.class_txt 
?>