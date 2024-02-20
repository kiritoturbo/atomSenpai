<?php get_header(); ?>

<main>
	<section id="page-header">
		<div class="page-header">
			<div class="container container-1000">
				<div class="page-header-top">
					<div class="page-header-top-left">
						<div class="title-page">
							<h2>Recruit</h2>
							<p>採用情報</p>
						</div>
					</div>
					<div class="page-header-top-right">

					</div>
				</div>
				<div class="breadcrums hide-for-small">
					<div class="container ">
						<ul>
							<li><?php custom_breadcrumbs(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="single-content">
		<div class="single-content pt-60 pt-sm-35 pb-80 pb-sm-40">
			<div class="container container-1100">
				<div class="box-post-title">
					<div class="box-single-top">
						<div class="title-line ">
							<div class="infor-line ">
								<div class="date fs-sm-14"><?php echo get_the_date('Y.m.d') ?></div>
								<?php 
									$recruit_types = get_the_terms(get_the_ID(), 'recruit-type');
									if ($recruit_types && !is_wp_error($recruit_types)) {
										$recruit_type = $recruit_types[0];
										$recruit_type_link = get_term_link($recruit_type);
									}
								?>
								<div class="cat catid-<?php echo $recruit_types[0]->term_id; ?>">
									<a style="background-color:<?php echo get_custom_taxonomy_color($recruit_type->term_id); ?>" href="<?php echo $recruit_type_link ?>" class="">
										<?php echo ($recruit_types[0]->name)?>
									</a>
								</div>

							</div>
							<div class="title-single pt-15 pt-sm-10"><?php echo the_title()?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="container container-1100">
				<div class="sub-title">募集職種概要</div>
				<div class="row row-xxxxlarge pt-60 pt-sm-20">
					<div class="large-6 col-12">
						<div class="col-inner">
							<div class="box-image-single">
								<?php if (has_post_thumbnail()) {
									echo get_the_post_thumbnail(get_the_id(),'full',array('class'=>'thumnail'));
								}else{
									echo 'Không có hình ảnh';
								}?>
							</div>
						</div>
					</div>
					<div class="large-6 col-12">
						<div class="col-inner pt-10 pl-sm-5 pr-sm-5">
							<div class="title-single-recruit"><?php the_title(); ?></div>
							<div class="content-field">
								<p>
									<?php the_excerpt(); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-xxxxlarge pt-60 pt-sm-35">
					<div class="large-6 col-12">
						<div class="col-inner">
						<div class="box-btn-single">
							<?php
								$recruit_corporate = get_the_terms(get_the_ID(), 'recruit-corporate');
								if ($recruit_corporate && !is_wp_error($recruit_corporate)) {
									$recruit_corporate = $recruit_corporate[0];
									$recruit_corporate_link = get_term_link($recruit_corporate);
									echo '<a href="'.home_url().'/'.$recruit_corporate->slug.'" class="btn btn-main bdcl-8">この職種の <span class="color-8 fs-sm-19 ls-sm-50 lh-sm-1-2 fs-28">施設</span> について知る</a>';
								}
							?>
						</div>

						</div>
					</div>
					<div class="large-6 col-12">
						<div class="col-inner pt-sm-35">
							<div class="box-btn-single">
								<a href="https://atom-recruit.comotec.website/senpai-type/consultant/" class="btn btn-main bdcl-12">
									この職種の
									<span class="color-12 fs-sm-19 ls-sm-50 lh-sm-1-2 fs-28">先輩社員</span>
									はこちら
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="box-border-950 mt-80 mt-sm-50">
					<div class="box-border-cont">
						<h2>ご質問・お問い合わせはこちらまで</h2>
						<p><a href="tel:0899345858">TEL：089-934-5858</a></p>
						<div class="img-line mt-40 mt-sm-25">
							<img src="https://atom-recruit.comotec.website/assets/images/index/img-line.svg" class="hide-for-small" alt="">
							<img src="https://atom-recruit.comotec.website/assets/images/index/img-line-sm.svg" class="show-for-small" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="list-tag-single pt-40 pb-70 pt-sm-35 pb-sm-50">
			<div class="container container-1030">
				<div class="sub-title">特長・条件タグ</div>
				<div class="list-tag mt-35">
					<a href="https://atom-recruit.comotec.website/tag/%e8%bb%8a%e9%80%9a%e5%8b%a4%e5%8f%af/">#車通勤可</a><a href="https://atom-recruit.comotec.website/tag/%e8%82%b2%e5%85%90%e5%bf%9c%e6%8f%b4/">#育児応援</a><a href="https://atom-recruit.comotec.website/tag/%e6%9c%aa%e7%b5%8c%e9%a8%93%e6%ad%93%e8%bf%8e/">#未経験歓迎</a><a href="https://atom-recruit.comotec.website/tag/%e7%a0%94%e4%bf%ae%e5%88%b6%e5%ba%a6%e3%81%82%e3%82%8a/">#研修制度あり</a><a href="https://atom-recruit.comotec.website/tag/%e5%be%a9%e8%81%b7%e6%ad%93%e8%bf%8e/">#復職歓迎</a><a href="https://atom-recruit.comotec.website/tag/%e8%a6%8b%e5%ad%a6ok/">#見学OK</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="single-content pt-70 pt-sm-40">
			<div class="container container-1000">
				<div class="sub-title">募集要項</div>
				<div class="list-box-table mt-35 mt-sm-20">
					<div class="box-table-custom">
						<div class="box-table-left">職　種</div>
						<div class="box-table-right">支援相談員</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">仕事の内容</div>
						<div class="box-table-right">介護老人保健施設にて利用者様・ご家族等に対する相談、介護保険サービス全般に対する助言およびマネジメントなど、支援相談員業務全般をご担当いただきます。</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">雇用形態</div>
						<div class="box-table-right">正社員</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">採用予定人数</div>
						<div class="box-table-right">1名</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">年　齢</div>
						<div class="box-table-right">59歳以下（定年を上限として）</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">学　歴</div>
						<div class="box-table-right">高校以上</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">試用期間</div>
						<div class="box-table-right">6ヶ月（期間中、賞与対象外）</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">給　与</div>
						<div class="box-table-right">217,600円～<br>
							（基本給＋職務手当＋業務手当+処遇改善手当）</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">手　当</div>
						<div class="box-table-right">＜別途支給＞<br>
							通勤手当　10,000円／月（上限）</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">昇　給</div>
						<div class="box-table-right">年1回</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">賞　与</div>
						<div class="box-table-right">年2回（計2.30ヶ月分）</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">休日・休暇</div>
						<div class="box-table-right">シフト制<br>
							年間休日108日（月9日程度休み）</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">勤務時間</div>
						<div class="box-table-right">①8:30～17:15　休憩75分<br>
							②8:30～12:30　休憩なし</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">勤務地</div>
						<div class="box-table-right">〒796-0003<br>
							愛媛県八幡浜市大平1番耕地870番地2</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">社会保険</div>
						<div class="box-table-right">雇用保険　労災保険　健康保険　厚生年金</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">必要な能力・経験</div>
						<div class="box-table-right">経験不問<br>
							※社会福祉士主事任用資格などの資格があれば尚可</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">応募の流れ</div>
						<div class="box-table-right">事前に「履歴書」をご送付ください。<br>
							書類選考後、面接日をご連絡いたします。</div>
					</div>
					<div class="box-table-custom">
						<div class="box-table-left">お問い合わせ先</div>
						<div class="box-table-right">089-934-5858／社会福祉法人白寿会 事務局</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container container-1100 list-field-single">
			<div class="sub-title mt-70">職場見学受付中</div>
			<div class="row row-xxxxlarge pt-60 pt-sm-30">
				<div class="large-6 col-12">
					<div class="col-inner">
						<div class="box-image-single">
							<img src="https://atom-recruit.comotec.website/wp-content/uploads/2023/04/西安外観遠景②.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="large-6 col-12">
					<div class="col-inner pt-10 pt-sm-0">
						<div class="title-single-recruit">事前職場見学　受付中</div>
						<div class="content-field">
							<p>施設内の入所および通所サービスをご案内いたします。</p>
							<p>職場環境を直接ご覧いただきながら、気になる点も全てお応えいたします。</p>
							<p>自分にあった環境かどうか、ご家庭と仕事の両立なども踏まえ、応募をご検討いただければ幸いです！</p>
							<p>※感染対策により一部見学エリアを制限している場合があります。</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<section>
		<div class="single-contact-form pt-90 pb-130 pt-sm-50 pb-sm-65">
			<div class="container container-1000">
				<div class="sub-title">採用エントリー</div>
				<div class="toggle-pc toggle-contact pt-50 pt-sm-30">
					<div class="toggle-hd">
						<div class="toggle-hd-inner"><span class="color-12 fs-28 fs-sm-18">エントリー</span>はこちらから</div>
					</div>
					<div class="toggle-cont" style="display: block;">
						<p class="lh-2-2 pt-70 pt-sm-30 fs-sm-14 text-center ff-noto lh-sm-1-5 text-sm-left">以下のフォームより、必要事項を入力のうえ送信してください。<br>
							<span class="color-warning">「必須」</span>は必ず入力してください。
						</p>

						<div class="contactForm pt-40 pt-sm-25">
							<div class="inner">
								<form action="https://atom-recruit.comotec.website/contact/clipmail.cgi" method="post" enctype="multipart/form-data">
									<input type="hidden" name="need" value="区分 対象 個人情報保護方針">
									<input type="hidden" name="仕事" value="【介護老人保健施設 西安】支援相談員　募集中">
									<input type="hidden" name="記事URL" value="https://atom-recruit.comotec.website/645/">
									<div class="form font01">
										<div class="stepList">
											<ul class="clearfix">
												<li class="step1 active">STEP1 <br class="show-for-small">内容の入力</li>
												<li class="step2">STEP2 <br class="show-for-small">入力の確認</li>
												<li class="step3">STEP3 <br class="show-for-small">送信完了</li>
											</ul>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign must"></span>
											<p>区分</p>
										</div>
										<div class="right">
											<div class="box-list-checkbox">
												<div class="box-check">
													<label for="応募"><input type="radio" name="区分" id="応募" value="応募"><span>応募</span></label>
												</div>
												<div class="box-check">
													<label for="見学"><input type="radio" name="区分" id="見学" value="見学"><span>見学</span></label>
												</div>
												<div class="box-check">
													<label for="問い合わせ"><input type="radio" name="区分" id="問い合わせ" value="問い合わせ"><span>問い合わせ</span> </label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-item mt-sm-5">
										<div class="left">
											<span class="sign must"></span>
											<p>対象</p>
										</div>
										<div class="right">
											<div class="box-list-checkbox">
												<div class="box-check">
													<label for="新卒"><input type="radio" name="対象" id="新卒" value="新卒"><span>新卒</span></label>
												</div>
												<div class="box-check pt-sm-5">
													<label for="既卒（卒業3年以内）"><input type="radio" name="対象" id="既卒（卒業3年以内）" value="既卒（卒業3年以内）"><span>既卒（卒業3年以内）</span></label>
												</div>
												<div class="box-check pt-sm-5">
													<label for="中途"><input type="radio" name="対象" id="中途" value="中途"><span>中途</span></label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-item mt-sm-5">
										<div class="left">
											<span class="sign must"></span>
											<p>希望職種</p>
										</div>
										<div class="right"><input type="text" name="_希望職種" class="bor full">
										</div>
									</div>
									<div class="form-item mt-sm-5">
										<div class="left">
											<span class="sign must"></span>
											<p>お名前</p>
										</div>
										<div class="right"><input type="text" name="_お名前" class="bor full">
											<p class="case">(例: 田中花子)</p>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign must"></span>
											<p>ふりがな</p>
										</div>
										<div class="right"><input type="text" name="_ふりがな" class="bor full">
											<p class="case">(例: たなかはなこ)</p>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign must"></span>
											<p>メールアドレス</p>
										</div>
										<div class="right"><input type="text" name="_email" class="bor full">
											<p class="case">(例: tanaka@mail.com)</p>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign any"></span>
											<p>年齢</p>
										</div>
										<div class="right">
											<input type="text" name="年齢" class="bor third"><span class="pl-20 fs-15 pl-sm-5 color-33">歳</span>

										</div>
									</div>
									<div class="form-item mt-sm-10">
										<div class="left">
											<span class="sign any"></span>
											<p>郵便番号 <span class="pl-20 fs-11 show-for-small">郵便番号から住所を自動入力します</span></p>
										</div>
										<div class="right"><input type="text" name="郵便番号" class="bor half" onkeyup="AjaxZip3.zip2addr(this,'','ご住所','ご住所');"> <span class="pl-20 fs-15 hide-for-small color-33">郵便番号から住所を自動入力します</span>
											<p class="case">(例: 7900951)</p>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign any"></span>
											<p>ご住所</p>
										</div>
										<div class="right"><input type="text" name="ご住所" class="bor full">
											<p class="case">(例:愛媛県松山市天山二丁目3番30号)</p>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign any"></span>
											<p>電話番号</p>
										</div>
										<div class="right"><input type="text" name="電話番号" class="bor half">
											<p class="case">(例: 0899461555)</p>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign any"></span>
											<p>実務経験</p>
										</div>
										<div class="right">
											<div class="box-list-checkbox">
												<div class="box-check">
													<label for="あり"><input type="radio" name="実務経験" id="あり" value="あり"><span>あり</span></label>
												</div>
												<div class="box-check">
													<label for="年" class="mr-15"><input type="text" name="実務経験年数" id="年" class="bor">年</label>
												</div>
												<div class="box-check">
													<label for="なし"><input type="radio" name="実務経験" id="なし" value="なし">なし</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-item mt-sm-10">
										<div class="left">
											<span class="sign any"></span>
											<p>最終学歴（在籍中含む）</p>
										</div>
										<div class="right"><input type="text" name="最終学歴（在籍中含む）" class="bor full">
											<p class="case">(例: 〇〇大学〇〇〇〇学部)</p>
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign any"></span>
											<p>資格</p>
										</div>
										<div class="right"><input type="text" name="資格" class="bor full">
										</div>
									</div>
									<div class="form-item">
										<div class="left">
											<span class="sign any"></span>
											<p>就労希望や条件など、<br> 求人に関する問い合わせ
											</p>
										</div>
										<div class="right">
											<textarea name="就労希望や条件など、求人に関する問い合わせ" class="bor"></textarea>

										</div>
									</div>
									<div class="form-item mt-sm-5">
										<div class="left">
											<span class="sign must"></span>
											<p>個人情報保護方針</p>
										</div>
										<div class="right">
											<div class="box-condition">
												<h2 class="fs-18 fw-bold color-black">個人情報保護方針</h2>
												<p class="fs-14 fw-normal color-black">アトムグループ (以下「当グループ」)は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
													<br><br> 個人情報の管理
													<br> 当グループは、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
													<br><br> 個人情報の利用目的
													<br> お客さまからお預かりした個人情報は、当グループからのご連絡や業務のご案内・ご質問に対する回答として、電子メールや資料のご送付にのみ利用いたします。
													<br><br> 個人情報の第三者への開示・提供の禁止
													<br> 当グループは、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
													<br> ・お客さまの同意がある場合
													<br> ・お客さまが希望されるサービスを行なうため、当グループが業務を委託する業者に開示する場合
													<br> ・法令に基づき開示することが必要である場合
													<br>
													<br> 個人情報の安全対策
													<br> 当グループは、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じます。
													<br>
													<br> ご本人の照会
													<br> お客さまご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
													<br>
													<br> 法令、規範の遵守と見直し
													<br> 当グループは、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
													<br><br> お問い合わせ
													<br> 当グループの個人情報の取扱に関するお問い合せは下記までご連絡ください。
													<br> アトムグループ
													<br> TEL：089-932-8686
												</p>
											</div>
											<div class="checkboxStyle mt-15">
												<label class="argee">
													<span class="condition"><span class="wpcf7-form-control wpcf7-acceptance">
															<span class="wpcf7-list-item">
																<label>
																	<input type="checkbox" name="個人情報保護方針" value="同意する" aria-invalid="false"><span class="wpcf7-list-item-label">個人情報保護方針 に同意する</span>
																</label>
															</span>
														</span>
													</span>
												</label>
											</div>
										</div>
									</div>

									<div class="submit-btn pt-70 pt-sm-30">
										<div class="one-btn">
											<button type="submit" value="送信確認" class="btn btn-type-1">送信確認</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="page-navi">
  <div class="page-navi pt-55 pt-sm-25 pb-70 pb-sm-85">
    <div class="container container-1000">
      <div class="pagination-list flex-col text-center">
        <ul class="wp-pagenavi" role="navigation">
          <?php
          $previous_post = get_previous_post();
          $next_post = get_next_post();
          ?>
          <li>
            <?php if ($previous_post) : ?>
              <a href="<?php echo get_permalink($previous_post); ?>" class="previouspostslink" aria-label="Trước"></a>
            <?php endif; ?>
          </li>

          <li>
            <a class="btn btn-main btn-home" rel="next" aria-label="一覧へ" href="https://atom-recruit.comotec.website/recruit">一覧へ</a>
          </li>

          <li>
            <?php if ($next_post) : ?>
              <a href="<?php echo get_permalink($next_post); ?>" class="nextpostslink" aria-label="Tiếp"></a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


</main>

<?php
get_footer();?>
