<?php include "header.php" ?>
<?php include "side.php" ?>
<article>
	<hgroup>
		<h1>컴퓨터와 인터넷</h1>
		<h2>국내와 도서 > 컴퓨터와 인터넷 > 웹개</h2>
	</hgroup>
	<section id="new_book"> <!-- 섹션을 이용 전체적인 레이아웃을 잡아줌 -->
		<h3>새로 나온 책</h3> <!-- 새로 나온 책 제목 처리, 여기가 1번 영역 -->
			<div id='left_scroll'><a href='javascript:slide("left");'><img src="imgs/left.gif" alt=""></a></div>
		<div id="carousel_inner">
			<ul id="carousel_ul">
				<li>
					<div id="book"> <!-- 책 내용 부분, 여기는 -->
						<a href=""><img src="imgs/products/book/html5.jpg" width="100" alt=""></a>
						<div class="sort">[컴퓨터와 인터넷]</div>
						<div class="title"></div>
						<div class="writer">양용석</div>
						<div class="price"><span>25,000원</span><br>22,500원</div>
					</div>
				</li>
				<li>
					<div id="book"> <!-- 책 내용 부분, 여기는 -->
						<a href=""><img src="imgs/products/book/html5.jpg" width="100" alt=""></a>
						<div class="sort">[컴퓨터와 인터넷]</div>
						<div class="title"></div>
						<div class="writer">양용석</div>
						<div class="price"><span>25,000원</span><br>22,500원</div>
					</div>
				</li>			
				<li>
					<div id="book"> <!-- 책 내용 부분, 여기는 -->
						<a href=""><img src="imgs/products/book/html5.jpg" width="100" alt=""></a>
						<div class="sort">[컴퓨터와 인터넷]</div>
						<div class="title"></div>
						<div class="writer">양용석</div>
						<div class="price"><span>25,000원</span><br>22,500원</div>
					</div>
				</li>
				<li>
					<div id="book"> <!-- 책 내용 부분, 여기는 -->
						<a href=""><img src="imgs/products/book/html5.jpg" width="100" alt=""></a>
						<div class="sort">[컴퓨터와 인터넷]</div>
						<div class="title"></div>
						<div class="writer">양용석</div>
						<div class="price"><span>25,000원</span><br>22,500원</div>
					</div>
				</li>
	            <li>
	                <div id="book">
	                    <img src="imgs/products/book/challenge.jpg" width="100">
	                    <div class="sort">[컴퓨터 인터넷]</div> 
	                    <div class="title">프로그래밍... </div> 
	                    <div class="writer">Takuya  | 로드북 </div> 
	                    <div class="price"><span>25,000원</span><br> 22,500원</div> 
	                </div>  
	       		</li>		
				<li>
					<div id="book"> <!-- 책 내용 부분, 여기는 -->
						<a href=""><img src="imgs/products/book/html5.jpg" width="100" alt=""></a>
						<div class="sort">[컴퓨터와 인터넷]</div>
						<div class="title"></div>
						<div class="writer">양용석</div>
						<div class="price"><span>25,000원</span><br>22,500원</div>
					</div>
				</li>									
			</ul>
		</div>
		<div id='right_scroll'><a href='javascript:slide("right");'><img src="imgs/right.gif" alt=""></a></div>
		<div class="clear"></div>
	</section>
	<div class="clear"></div>
	<div id="sorting">
		<ul>
			<li><a href="#" class="active"></a>베스트 셀러</li>
			<li><a href="#"></a>최신 출간</li>
			<li><a href="#" style="border:none"></a>최근 등록</li>
		</ul>
	</div>
	<table id="list_view">
		<tr>
			<td class="goods_image"><img src="imgs/products/book/html5.jpg" alt=""></td>
			<!-- 상품 이미지 -->
			<td class="goods_description">
			<!-- 상품에 대한 설명이 들어갑니다. -->
			<h2><a href="detail_php">처음부터 다시 배우는 HTML5 CSS3</a></h2>
			<!-- 상품의 제목을 h2를 이용해서 설정했습니다 -->
			<div class="writer_press">양용석 저 | 로드북 | 2011.10</div>
			<!-- 저자와 출판사 부분은 따로 클래스 선택자로 묶어줌 -->
			<p>html와 css</p> </td>
			<!-- 내용으느 p태그를 이용해서 묶어 준다 -->
			<td class="price"><span>25,000원</span><br>
				<strong>22,500원</strong><br>
				(10% 할인)</td>
			<!-- 가격 설정 부분은 <span>태그를 이용해 묶어준다 -->
			<td><input name="" type="checkbox" value=""></td>
			<td class="buy_btns">
				<!-- 버튼이 들어가는 부분은 리스트 태그를 이용ㅎ서 정렬해준다  -->
				<ul>
					<li><a href="#">장바구니</a></li>
					<li><a href="#">구매하기</a></li>
					<li><a href="#">비교하기</a></li>
				</ul>
			</td>
		</tr>
	</table>
	<div id="page_wrap">
		<ul id="page_control">
			<li><a href="#" class="no_border">Prev</a></li>
			<li><a href="#" class="page_contrl_active">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li><a href="#">10</a></li>
			<li><a href="#" class="no_border">Next</a></li>
		</ul>
	</div>
</article>
<?php include "footer.php" ?>