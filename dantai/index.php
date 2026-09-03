<!DOCTYPE html>
<html lang="ja">
<head><meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>河口湖の団体ランチ・宴会｜予約制で最大100名対応（ほうとう）｜そば打ち＆染物体験教室</title>
<meta name="description" content="山梨県河口湖の団体ランチ・宴会ページ。予約制で最大100名対応（ほうとう）。ほうとう・そば・吉田のうどん・焼肉定食・野菜ほうとう。¥1,200〜。大型バス無料駐車場・河口湖駅徒歩12分。旅行会社様・企業・修学旅行のお昼どうぞ。">
<meta name="robots" content="max-image-preview:large">
<link rel="canonical" href="./">
<link rel="icon" href="../assets/cropped-389258-32x32.jpg" sizes="32x32">
<link rel="icon" href="../assets/cropped-389258-192x192.jpg" sizes="192x192">
<link rel="apple-touch-icon" href="../assets/cropped-389258-180x180.jpg">
<link rel="stylesheet" href="../css/lib.min.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="../assets/dantai-page.css?v=202609031830">
<style>
/* ============ launch/ 団体ランチページ 専用スタイル ============ */
:root{
  --lch-ink:#1A1A1A;
  --lch-ink-2:#4A4A4A;
  --lch-navy:#0a1528;
  --lch-base:#F0EEE9;
  --lch-cream:#F5F0E8;
  --lch-sand:#DDD5C8;
  --lch-persimmon:#FF5C34;
}
main.lch-main{color:var(--lch-ink);font-family:"Noto Sans JP","Hiragino Sans","Yu Gothic","Meiryo",sans-serif;background:var(--lch-base);}
main.lch-main :where(h1,h2,h3){font-family:"Noto Serif JP","Hiragino Mincho ProN","Yu Mincho",serif;letter-spacing:.02em;line-height:1.35;font-weight:700;color:var(--lch-navy);}

/* --- Hero: H1 のみ + 背景画像 + overlay (オーナー選択 A+背景画像 2026-07-13) --- */
.lch-hero{position:relative;overflow:hidden;background:var(--lch-navy);color:#fff;padding:0;}
.lch-hero-bg{position:absolute;inset:0;background:url('../assets/dantai_hoto_group_eating_scene.jpg') center/cover no-repeat;filter:brightness(.5);z-index:0;}
.lch-hero-inner{position:relative;z-index:1;max-width:920px;margin:0 auto;padding:96px 20px;text-align:center;}
.lch-hero-inner h1{color:#fff;font-size:clamp(1.7rem,5.6vw,2.6rem);margin:0;line-height:1.4;text-shadow:0 2px 6px rgba(0,0,0,.5);font-family:"Noto Serif JP",serif;font-weight:700;letter-spacing:.02em;}
.lch-hero-h1-sub{display:block;font-size:.68em;font-weight:500;margin-top:14px;opacity:.95;letter-spacing:.03em;}
@media(min-width:768px){
  .lch-hero-inner{padding:140px 32px;}
}

/* --- Section shared --- */
.lch-section{padding:56px 20px;}
.lch-section-inner{max-width:1080px;margin:0 auto;}
.lch-section h2{font-size:clamp(1.4rem,4.8vw,1.9rem);margin:0 0 8px;text-align:center;}
.lch-section-lead{text-align:center;color:var(--lch-ink-2);font-size:.9rem;margin:0 auto 32px;max-width:640px;line-height:1.7;}
@media(min-width:768px){.lch-section{padding:80px 24px;}}

/* --- Trust bar --- */
.lch-trust{background:#fff;border-top:1px solid var(--lch-sand);border-bottom:1px solid var(--lch-sand);padding:32px 20px;}
.lch-trust-grid{max-width:960px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:12px;}
.lch-trust-item{text-align:center;padding:8px;}
.lch-trust-item .num{font-family:"Noto Serif JP",serif;font-size:clamp(1.4rem,5vw,1.8rem);color:var(--lch-navy);font-weight:700;font-variant-numeric:tabular-nums;line-height:1.2;}
.lch-trust-item .num .lch-trust-unit{font-family:"Noto Sans JP","Hiragino Sans","Yu Gothic","Meiryo",sans-serif;font-size:.6em;font-weight:400;}
.lch-trust-item .lbl{font-size:.78rem;color:var(--lch-ink-2);margin-top:4px;line-height:1.5;}
@media(min-width:768px){.lch-trust-grid{grid-template-columns:repeat(4,1fr);gap:24px;}}

/* --- Plans: genre-sectioned, pairwise comparison --- */
.lch-plans{padding:0;background:transparent;}
.lch-genre{padding:clamp(3rem,8vw,5rem) 20px;}
.lch-genre--alt{background:#F0EEE9;}
.lch-genre--white{background:#FFFFFF;}
.lch-genre-inner{max-width:1080px;margin:0 auto;}
.lch-genre-head{text-align:center;margin-bottom:28px;}
.lch-genre-head h2{font-size:clamp(1.3rem,4.4vw,1.7rem);margin:0 0 6px;color:var(--lch-navy);font-family:"Noto Serif JP",serif;line-height:1.35;letter-spacing:.02em;}
.lch-genre-head p{font-size:.85rem;color:var(--lch-ink-2);margin:0;line-height:1.7;}

.lch-plan-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;}
@media(min-width:768px){.lch-plan-grid{gap:16px;}}

/* --- 通常/プレミアム tier 分離（全ジャンル上下段統一・2026-07-14 修正） --- */
.lch-tier{margin-top:64px;}
.lch-tier:first-of-type{margin-top:0;}
.lch-tier-head{display:flex;align-items:center;gap:16px;margin-bottom:22px;padding:0 4px;}
.lch-tier-head::before,.lch-tier-head::after{content:"";flex:1;height:1px;background:var(--lch-sand);}
.lch-tier-head h3{margin:0;font-family:"Noto Serif JP",serif;color:var(--lch-navy);font-size:clamp(1.15rem,4vw,1.4rem);font-weight:700;letter-spacing:.1em;white-space:nowrap;}
.lch-tier--premium .lch-tier-head::before,.lch-tier--premium .lch-tier-head::after{background:var(--lch-persimmon);opacity:.5;}
.lch-tier--premium .lch-tier-head h3{color:var(--lch-persimmon);}

/* グリッド：SP 2 列（grid）、PC は flex で「3列時のカード幅」に全ジャンル統一 + 2個以下は中央寄せ */
.lch-plan-grid--n3,.lch-plan-grid--n2,.lch-plan-grid--quad2,.lch-plan-grid--quad2{display:grid;grid-template-columns:repeat(2,1fr);}
@media(min-width:768px){
  .lch-plan-grid--n3,.lch-plan-grid--n2,.lch-plan-grid--quad2,.lch-plan-grid--quad2{display:flex;flex-wrap:wrap;justify-content:center;gap:16px;}
  .lch-plan-grid--n3 > .lch-plan,
  .lch-plan-grid--n2 > .lch-plan,
  .lch-plan-grid--quad2 > .lch-plan,
  .lch-plan-grid--quad2 > .lch-plan{flex:0 0 calc((100% - 32px) / 3);max-width:calc((100% - 32px) / 3);}
}

.lch-plan{background:#fff;border:1px solid var(--lch-sand);border-radius:14px;overflow:hidden;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,border-color .15s ease;display:flex;flex-direction:column;text-align:left;position:relative;}
.lch-plan:hover,.lch-plan:focus-visible{transform:translateY(-3px);box-shadow:0 8px 22px rgba(10,21,40,.12);border-color:#c4b8a2;outline:none;}
.lch-plan-img-wrap{aspect-ratio:4/3;overflow:hidden;position:relative;background:#F5F0E8;}
.lch-plan-img-wrap img{width:100%;height:100%;object-fit:cover;display:block;}
.lch-plan-body{padding:12px 12px 14px;flex:1;display:flex;flex-direction:column;gap:6px;}
.lch-plan-name{font-family:"Noto Serif JP",serif;font-weight:700;color:var(--lch-navy);font-size:.95rem;line-height:1.4;margin:0;letter-spacing:.01em;}
.lch-plan-price{color:var(--lch-ink);font-variant-numeric:tabular-nums;line-height:1.4;}
.lch-plan-price strong{font-size:1.2rem;font-weight:800;color:var(--lch-persimmon);}
.lch-plan-price small{font-size:.7rem;color:var(--lch-ink-2);font-weight:400;margin-left:2px;}
.lch-plan-hint{margin-top:auto;font-size:.7rem;color:var(--lch-ink-2);border-top:1px dashed var(--lch-sand);padding-top:8px;display:flex;align-items:center;justify-content:space-between;gap:4px;}
.lch-plan-hint::after{content:"→";font-size:.9rem;color:var(--lch-persimmon);font-weight:700;}
@media(min-width:768px){
  .lch-plan-body{padding:14px 16px 16px;}
  .lch-plan-name{font-size:1rem;}
}

.lch-genre-footnote{margin-top:20px;font-size:.78rem;color:var(--lch-ink-2);text-align:center;line-height:1.7;}
.lch-genre-footnote strong{color:var(--lch-persimmon);font-weight:600;}

.lch-genre-cta{margin-top:32px;text-align:center;}
.lch-genre-cta a{display:inline-block;background:#fff;color:var(--lch-navy);border:1.5px solid var(--lch-navy);padding:12px 28px;border-radius:10px;font-weight:600;font-size:.9rem;text-decoration:none;transition:background .15s ease,color .15s ease;}
.lch-genre-cta a:hover,.lch-genre-cta a:focus-visible{background:var(--lch-navy);color:#fff;outline:none;}
.lch-genre--alt .lch-genre-cta a{background:transparent;}

/* --- Conditions Bento --- */
.lch-conditions{background:var(--lch-cream);}
.lch-cond-bento{display:grid;grid-template-columns:1fr;gap:12px;max-width:960px;margin:0 auto;}
@media(min-width:768px){.lch-cond-bento{grid-template-columns:repeat(3,1fr);grid-auto-rows:1fr;gap:16px;}}
.lch-cond-item{background:#fff;border:1px solid var(--lch-sand);border-radius:12px;padding:20px;display:flex;gap:14px;align-items:flex-start;}
.lch-cond-icon{flex-shrink:0;width:44px;height:44px;background:var(--lch-navy);border-radius:10px;display:flex;align-items:center;justify-content:center;color:#fff;}
.lch-cond-icon svg{width:22px;height:22px;stroke:currentColor;stroke-width:1.8;fill:none;stroke-linecap:round;stroke-linejoin:round;}
.lch-cond-body h3{font-size:1rem;margin:0 0 6px;color:var(--lch-navy);}
.lch-cond-body p{margin:0;font-size:.85rem;color:var(--lch-ink-2);line-height:1.65;}
.lch-cond-body ul{margin:0;padding-left:1.15em;font-size:.85rem;color:var(--lch-ink-2);line-height:1.6;list-style:disc;}
.lch-cond-body ul li{margin-bottom:5px;}
.lch-cond-body ul li:last-child{margin-bottom:0;}
.lch-cond-body ul li::marker{color:var(--lch-navy);}
.lch-cond-body p strong,.lch-cond-body ul strong{color:var(--lch-ink);font-weight:700;}

/* --- FAQ --- */
.lch-faq{background:#fff;}
.lch-faq-list{max-width:820px;margin:0 auto;border-top:1px solid var(--lch-sand);}
.lch-faq-list details{border-bottom:1px solid var(--lch-sand);}
.lch-faq-list summary{list-style:none;padding:18px 44px 18px 4px;font-weight:600;color:var(--lch-navy);cursor:pointer;position:relative;font-size:.95rem;line-height:1.55;font-family:"Noto Serif JP",serif;}
.lch-faq-list summary::-webkit-details-marker{display:none;}
.lch-faq-list summary::after{content:"+";position:absolute;right:8px;top:50%;transform:translateY(-50%);font-size:1.4rem;color:var(--lch-persimmon);font-weight:400;transition:transform .2s ease;line-height:1;}
.lch-faq-list details[open] summary::after{transform:translateY(-50%) rotate(45deg);}
.lch-faq-list details > div{padding:0 4px 20px;color:var(--lch-ink-2);font-size:.9rem;line-height:1.8;}
.lch-faq-list details > div ul{margin:8px 0 0;padding-left:1.2em;}
.lch-faq-list details > div li{margin:4px 0;}

/* --- Access --- */
.lch-access{background:var(--lch-base);}
.lch-access-times{max-width:820px;margin:0 auto 20px;display:grid;grid-template-columns:1fr 1fr;gap:10px;}
@media(min-width:768px){.lch-access-times{grid-template-columns:repeat(3,1fr);gap:14px;}}
.lch-access-time{background:#fff;border:1px solid var(--lch-sand);border-radius:10px;padding:14px 12px;text-align:center;}
.lch-access-time .from{font-size:.78rem;color:var(--lch-ink-2);}
.lch-access-time .dur{display:block;margin-top:4px;font-family:"Noto Serif JP",serif;font-weight:700;font-size:1.05rem;color:var(--lch-navy);font-variant-numeric:tabular-nums;line-height:1.3;}
.lch-access-time .dur small{font-family:"Noto Sans JP",sans-serif;font-size:.72rem;color:var(--lch-ink-2);font-weight:400;display:inline;margin-left:2px;}
.lch-access-map{max-width:820px;margin:0 auto;border-radius:12px;overflow:hidden;border:1px solid var(--lch-sand);aspect-ratio:16/9;background:#eee;}
.lch-access-map iframe{width:100%;height:100%;border:0;display:block;}
.lch-access-address{text-align:center;font-size:.85rem;color:var(--lch-ink);margin:20px auto 0;line-height:1.8;max-width:820px;}
.lch-access-address strong{display:block;font-family:"Noto Serif JP",serif;font-size:1rem;color:var(--lch-navy);margin-bottom:4px;}

/* --- Final CTA --- */
.lch-final{background:var(--lch-navy);color:#fff;padding:56px 20px;text-align:center;}
.lch-final-inner{max-width:640px;margin:0 auto;}
.lch-final h2{color:#fff;font-size:clamp(1.4rem,5vw,1.8rem);margin:0 0 14px;line-height:1.4;}
.lch-final p{color:#F0EEE9;font-size:.9rem;line-height:1.75;margin:0 0 28px;}
.lch-final .btn-primary{max-width:420px;margin:0 auto;}
.lch-final .lch-hero-micro{color:#DDD5C8;}

/* Bottom padding to avoid overlap with sticky CTA */
@media(max-width:900px){main.lch-main{padding-bottom:80px;}}

/* モーダル内のカテゴリバッジ非表示（プレミアム/単品/定食はセクション分けで自明・冗長） */
#planModal .plan-badge{display:none;}

/* ジャンル見出し下の情報バッジ（人数・条件等をピル状で視覚化） */
.lch-genre-badges{display:flex;flex-wrap:wrap;justify-content:center;gap:8px;margin-top:10px;}
.lch-genre-badge{display:inline-flex;align-items:center;gap:6px;padding:6px 12px;background:#fff;border:1px solid var(--lch-sand);border-radius:999px;font-size:.78rem;color:var(--lch-ink);font-weight:500;line-height:1.3;}
.lch-genre-badge svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;flex-shrink:0;}
.lch-genre--alt .lch-genre-badge{background:#fff;}
.lch-genre-note{text-align:center;margin:14px auto 0;font-size:.82rem;color:var(--lch-ink-2);line-height:1.6;max-width:640px;}
.lch-genre-head .lch-genre-note{margin-left:auto;margin-right:auto;}

/* tier-note は共通ブロックに統合したため非表示（2026-07-14） */
.lch-tier-note{display:none;}

/* Plans 冒頭「プランの内容について」共通ブロック */
.lch-plan-common{max-width:720px;margin:40px auto;padding:22px 26px;background:#faf6ec;border:1px solid var(--lch-sand);border-radius:12px;line-height:1.75;color:var(--lch-ink);}
.lch-plan-common-title{display:block;font-size:.82rem;font-weight:700;color:var(--lch-persimmon);letter-spacing:.08em;margin:0 0 12px;text-align:center;}
.lch-plan-common p{margin:0 0 10px;font-size:.94rem;}
.lch-plan-common p:last-child{margin-bottom:0;}
.lch-plan-common p.lch-plan-common-sub{font-size:.82rem;color:var(--lch-ink-2);margin-top:6px;}
.lch-plan-common strong{color:var(--lch-persimmon);font-weight:700;}

/* 焼肉ジャンル共通の追加情報ボックス */
.lch-yakiniku-note-box{max-width:640px;margin:6px auto 22px;padding:14px 20px;background:#fff;border:1px solid var(--lch-sand);border-radius:12px;font-size:.9rem;line-height:1.75;color:var(--lch-ink);text-align:left;}
.lch-yakiniku-note-box p{margin:0;}
.lch-yakiniku-note-box .lch-yakiniku-note-sub{display:block;margin-top:8px;padding-top:8px;border-top:1px dashed var(--lch-sand);font-size:.82rem;color:var(--lch-ink-2);}

/* モーダル内アレルギー行を別枠化 */
#planModalList li.plan-modal-allergen{margin-top:16px;padding:12px 16px;background:#fff5f0;border:1px solid var(--lch-persimmon);border-radius:8px;color:var(--lch-ink);font-size:.88rem;line-height:1.65;}
#planModalList li.plan-modal-allergen::before{display:none;}

/* SP モーダル画像を全体表示（common.css の cover を上書き）
   意図: オーナー「商品が全部見える」/ 画像は1.41:1 横長・枠は 3:2 で cover だと上下切れる
   Fix: aspect-ratio を画像実比率に近く + contain */
@media(max-width:899px){
  #planModal .plan-modal-img{aspect-ratio:1.41/1 !important;object-fit:contain !important;object-position:center !important;background:#fff !important;}
}

/* モーダル内 固有名詞（料理名・素材名）を黒太字で強調
   意図: 「セット内容」の中で何が付いてくるかを一目で把握できるように
        説明文（「山梨郷土の家庭料理」等）と区別 */
#planModalList li strong{color:var(--lch-ink);font-weight:700;}

/* Access セクション：交通手段別グルーピング */
.lch-access-groups{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin:0 auto 32px;max-width:960px;}
.lch-access-group{background:#fff;border:1px solid var(--lch-sand);border-radius:12px;padding:20px 22px;}
.lch-access-group h3{margin:0 0 14px;font-size:.95rem;font-weight:700;color:var(--lch-navy);letter-spacing:.04em;padding-bottom:10px;border-bottom:1px solid var(--lch-sand);}
.lch-access-group .lch-access-times{display:flex;flex-direction:column;gap:10px;grid-template-columns:none;}
.lch-access-group .lch-access-time{display:flex;justify-content:space-between;align-items:baseline;gap:12px;padding:6px 0;}
.lch-access-shop-info{max-width:960px;margin:0 auto 24px;padding:16px 22px;background:#faf6ec;border:1px solid var(--lch-sand);border-radius:12px;text-align:center;font-size:.92rem;line-height:1.75;color:var(--lch-ink);}
.lch-access-shop-info strong{color:var(--lch-navy);margin-right:8px;}
@media(max-width:640px){
  .lch-access-groups{grid-template-columns:1fr;gap:14px;margin:0 16px 24px;}
}

/* ===== Access PC 2 カラムレイアウト（NotebookLM Split-Screen 出典・2026-07-15 追加） =====
   意図（PC）: 幹事は PC で見る場合スクロール少なく完結させたい → 左=情報 / 右=地図 の split-screen で 1 スクロール以内
   意図（SP）: モバイル 100% で縦積み → 情報を先読み → 地図で位置確認 */
/* SP: セクション間の余白確保（vertical rhythm 32px）— オーナー叱責「余白感考えろ」2026-07-15 */
.lch-access-pc-layout{width:100%;max-width:960px;margin:0 auto;box-sizing:border-box;display:flex;flex-direction:column;gap:32px;}
@media(min-width:900px){
  /* PC: 左=情報リスト（フラット・強調差なし）/ 右=地図 のシンプル 2 カラム
     意図: オーナー「強調差の意図不明」を受け、フラット化で「使う人が困らない」設計 */
  .lch-access-pc-layout{width:100%;max-width:100%;display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:24px;align-items:stretch;box-sizing:border-box;}
  .lch-access-pc-layout > *{min-width:0;}
  .lch-access-pc-layout .lch-access-variant{margin:0!important;max-width:100%;}
  .lch-access-pc-layout .lch-access-b{max-width:100%;height:100%;display:flex;flex-direction:column;}
  .lch-access-pc-layout .lch-access-b-hero{flex:1;display:flex;flex-direction:column;justify-content:center;}
  .lch-access-pc-layout .lch-access-map{max-width:100%;margin:0;height:100%;min-height:520px;}
  .lch-access-pc-layout .lch-access-map iframe{width:100%;height:100%;min-height:520px;}
}

/* Access 情報カード：強調差を撤廃してフラット化（全項目同一階層） */
/* 意図: オーナー「なぜ徒歩12分と5分だけ強調？」の疑問に応え、全4項目を同一スタイルに統一
        → 見る人が「なぜここだけ強調？」の混乱をなくす */
.lch-access-b-flat{background:#faf6ec;border:1px solid var(--lch-sand);border-radius:14px;padding:28px 26px;display:flex;flex-direction:column;gap:20px;}
.lch-access-b-flat .flat-row{display:flex;align-items:center;gap:14px;padding-bottom:16px;border-bottom:1px dashed var(--lch-sand);}
.lch-access-b-flat .flat-row:last-child{border-bottom:none;padding-bottom:0;}
.lch-access-b-flat .flat-row .ic{width:32px;height:32px;color:var(--lch-persimmon);flex-shrink:0;}
.lch-access-b-flat .flat-row .txt{display:flex;flex-direction:column;gap:2px;}
.lch-access-b-flat .flat-row .l{font-size:.85rem;color:var(--lch-ink);font-weight:600;line-height:1.4;}
.lch-access-b-flat .flat-row .l strong{color:var(--lch-persimmon);font-family:"Noto Serif JP",serif;font-weight:800;font-size:1.1em;font-variant-numeric:tabular-nums;margin:0 3px;}
.lch-access-b-flat .flat-row .sub{font-size:.78rem;color:var(--lch-ink-2);line-height:1.5;}
.lch-access-b-flat .flat-note{margin-top:4px;padding:10px 14px;background:#fff;border-radius:8px;font-size:.82rem;color:var(--lch-ink);text-align:center;font-weight:600;}

/* ===== Access バリアント比較用（3 パターン縦積み・オーナー選択後に絞る） ===== */
.lch-access-variant{max-width:1000px;margin:0 auto 56px;padding-bottom:44px;border-bottom:2px dashed var(--lch-sand);}
.lch-access-variant:last-of-type{border-bottom:none;margin-bottom:16px;}
.lch-access-variant-label{display:inline-block;background:var(--lch-persimmon);color:#fff;font-size:.78rem;font-weight:700;letter-spacing:.06em;padding:6px 16px;border-radius:20px;margin-bottom:24px;}

/* --- 案 A: Bento Grid --- */
.lch-access-a{display:grid;gap:16px;}
.lch-access-a-primary{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
.lch-access-a-sub{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;}
.lch-access-a-cell{background:#fff;border:1px solid var(--lch-sand);border-radius:14px;padding:22px 24px;display:flex;flex-direction:column;gap:6px;position:relative;}
.lch-access-a-cell .ic{width:34px;height:34px;color:var(--lch-persimmon);margin-bottom:4px;}
.lch-access-a-cell .label{font-size:.85rem;color:var(--lch-ink-2);letter-spacing:.03em;}
.lch-access-a-cell .value{font-family:"Noto Serif JP",serif;font-size:clamp(1.3rem,3.6vw,1.7rem);color:var(--lch-navy);line-height:1.15;font-variant-numeric:tabular-nums;font-weight:700;}
.lch-access-a-cell .value strong{font-size:1.55em;font-weight:800;color:var(--lch-persimmon);margin:0 2px;}
.lch-access-a-cell .hint{font-size:.75rem;color:var(--lch-ink-2);}
.lch-access-a-cell .badge{display:inline-block;background:var(--lch-persimmon);color:#fff;font-size:.7rem;padding:3px 9px;border-radius:4px;letter-spacing:.03em;margin-top:6px;font-weight:600;align-self:flex-start;}
.lch-access-a-cell.small{padding:16px 18px;}
.lch-access-a-cell.small .ic{width:26px;height:26px;}
.lch-access-a-cell.small .value{font-size:clamp(1rem,2.8vw,1.25rem);}
.lch-access-a-cell.small .value strong{font-size:1.4em;}

/* --- 案 B: ヒーロー式 --- */
.lch-access-b{max-width:820px;margin:0 auto;}
.lch-access-b-hero{background:#faf6ec;border:1px solid var(--lch-sand);border-radius:16px;padding:40px 30px;text-align:center;}
.lch-access-b-headline{display:flex;align-items:center;justify-content:center;gap:36px;flex-wrap:wrap;}
.lch-access-b-hitem{display:flex;align-items:center;gap:14px;}
.lch-access-b-hitem .ic{width:40px;height:40px;color:var(--lch-persimmon);flex-shrink:0;}
.lch-access-b-hitem .txt{display:flex;flex-direction:column;text-align:left;}
.lch-access-b-hitem .l{font-size:.82rem;color:var(--lch-ink-2);letter-spacing:.03em;margin-bottom:2px;}
.lch-access-b-hitem .v{font-family:"Noto Serif JP",serif;font-size:clamp(1.15rem,3vw,1.4rem);color:var(--lch-navy);line-height:1.15;font-weight:700;font-variant-numeric:tabular-nums;}
.lch-access-b-hitem .v strong{font-size:1.8em;font-weight:800;color:var(--lch-persimmon);margin:0 4px;}
.lch-access-b-divider{width:1px;height:64px;background:var(--lch-sand);}
.lch-access-b-note{display:inline-block;margin:22px 0 0;padding:8px 18px;background:#fff;font-size:.86rem;color:var(--lch-ink);font-weight:600;border-radius:8px;border:1px solid var(--lch-sand);}
.lch-access-b-strip{display:flex;gap:12px;margin-top:20px;padding:18px 20px;background:#fff;border:1px solid var(--lch-sand);border-radius:12px;justify-content:space-around;flex-wrap:wrap;}
.lch-access-b-strip .lch-access-b-item{font-size:.88rem;color:var(--lch-ink);line-height:1.4;}
.lch-access-b-strip .lch-access-b-item strong{color:var(--lch-persimmon);font-weight:700;font-family:"Noto Serif JP",serif;font-size:1.15em;margin:0 3px;font-variant-numeric:tabular-nums;}
.lch-access-b-strip .lch-access-b-item .mini{display:block;font-size:.72rem;color:var(--lch-ink-2);margin-top:2px;}

/* --- 案 C: 地図中心 + Progressive Disclosure --- */
.lch-access-c{max-width:960px;margin:0 auto;}
.lch-access-c-topbar{display:flex;gap:10px;justify-content:center;align-items:center;padding:16px 20px;background:#faf6ec;border:1px solid var(--lch-sand);border-radius:12px 12px 0 0;border-bottom:none;flex-wrap:wrap;}
.lch-access-c-topitem{font-size:.92rem;color:var(--lch-ink);display:inline-flex;align-items:center;gap:4px;}
.lch-access-c-topitem strong{color:var(--lch-persimmon);font-weight:700;font-family:"Noto Serif JP",serif;font-size:1.05em;font-variant-numeric:tabular-nums;margin-left:4px;}
.lch-access-c-sep{color:var(--lch-sand);font-size:.85rem;}
.lch-access-c-map{position:relative;height:400px;overflow:hidden;border:1px solid var(--lch-sand);border-radius:0 0 12px 12px;}
.lch-access-c-map iframe{width:100%;height:100%;border:0;}
.lch-access-c-details{margin-top:14px;background:#fff;border:1px solid var(--lch-sand);border-radius:10px;padding:14px 18px;}
.lch-access-c-details summary{cursor:pointer;font-size:.9rem;color:var(--lch-persimmon);font-weight:600;list-style:none;position:relative;padding-right:22px;}
.lch-access-c-details summary::after{content:"▼";position:absolute;right:0;top:50%;transform:translateY(-50%);font-size:.7rem;transition:transform .2s;}
.lch-access-c-details[open] summary::after{transform:translateY(-50%) rotate(180deg);}
.lch-access-c-detailinner{margin-top:12px;font-size:.88rem;line-height:1.8;color:var(--lch-ink);}
.lch-access-c-detailinner p{margin:0 0 4px;}
.lch-access-c-detailinner strong{color:var(--lch-persimmon);font-weight:700;font-variant-numeric:tabular-nums;}

@media(max-width:640px){
  .lch-access-variant{margin:0 16px 40px;}
  .lch-access-a-primary{grid-template-columns:1fr;}
  .lch-access-a-sub{grid-template-columns:1fr;}
  .lch-access-b-headline{flex-direction:column;gap:22px;}
  .lch-access-b-divider{width:60px;height:1px;}
  .lch-access-c-map{height:320px;}
  .lch-access-c-topbar{flex-direction:column;gap:6px;padding:14px;}
  .lch-access-c-sep{display:none;}
}

/* Final CTA：サイトのライトトーンに刷新 */
.lch-final{background:#f5f0e8 !important;color:var(--lch-ink) !important;}
.lch-final h2{color:var(--lch-navy) !important;}
.lch-final p{color:var(--lch-ink) !important;}
.lch-final .lch-hero-micro{color:var(--lch-ink-2) !important;margin-top:20px !important;font-size:.82rem !important;line-height:1.7 !important;}
/* Final CTA vertical rhythm: h2/desc/button/micro の間隔を余裕を持って確保 */
.lch-final .btn-primary{margin-top:8px;margin-bottom:0;}

@media(max-width:640px){
  .lch-plan-common{margin:32px 16px;padding:18px 20px;}
  .lch-plan-common p{font-size:.9rem;}
  .lch-yakiniku-note-box{margin:6px 16px 20px;padding:12px 16px;}
}

/* --- PC 用 plan-modal 2 カラム override (SP は common.css の bottom sheet を維持) --- */
@media(min-width:900px){
  #planModal{align-items:center;padding:24px;}
  /* PC モーダル 2 カラム
     意図: オーナー要求「商品が全部見える」→ 画像側を広く（6fr 5fr）+ object-fit:contain で全体表示
     出典: css-tricks.com/cross-document-view-transitions-part-1/ (nb:0a7b1ca3 b3139a03) */
  #planModal .plan-modal-inner{max-width:960px;max-height:82vh;border-radius:16px;display:grid;grid-template-columns:6fr 5fr;gap:0;transform:translateY(20px) scale(.98);overflow:hidden;}
  #planModal.open .plan-modal-inner{transform:none;}
  #planModal .plan-modal-header{position:absolute;top:0;right:0;padding:12px;z-index:2;background:none;justify-content:flex-end;}
  #planModal .plan-modal-drag{display:none;}
  #planModal .plan-modal-close{position:static;transform:none;background:rgba(255,255,255,.92);color:#0a1528;width:36px;height:36px;font-size:.95rem;box-shadow:0 2px 6px rgba(0,0,0,.2);}
  #planModal .plan-modal-img{grid-column:1;grid-row:1;aspect-ratio:auto;height:100%;max-height:82vh;object-fit:contain;object-position:center;background:#fff;}
  #planModal .plan-modal-content{grid-column:2;grid-row:1;padding:32px 32px;max-height:82vh;overflow-y:auto;}
  #planModal .plan-modal-name{font-size:1.5rem;margin-top:0;}
}

/* ほうとう単品ランチ表（2026-08-19 団体サイトと同期・団体common.cssの.price-tableと同ルック） */
.tanpin-table-wrap{max-width:720px;margin:28px auto 0;overflow:hidden;border-radius:8px;box-shadow:0 2px 12px rgba(0,0,0,.06);}
.tanpin-table{width:100%;border-collapse:collapse;font-size:14px;background:#fff;}
.tanpin-table thead th{background:var(--lch-navy);color:#e8c96e;padding:13px 18px;font-family:"Noto Serif JP",serif;font-weight:600;text-align:left;white-space:nowrap;}
.tanpin-table thead th.num{text-align:right;}
.tanpin-table tbody td{padding:13px 18px;border-bottom:1px solid rgba(0,0,0,.06);color:var(--lch-ink-2);vertical-align:middle;}
.tanpin-table tbody tr:last-child td{border-bottom:none;}
.tanpin-table tbody tr:nth-child(even) td{background:#faf6ee;}
.tanpin-table td.val{font-family:"Noto Serif JP",serif;font-size:18px;color:var(--lch-navy);font-weight:700;white-space:nowrap;text-align:right;}
@media(max-width:480px){
  .tanpin-table thead th{padding:10px 8px;font-size:12px;}
  .tanpin-table tbody td{padding:10px 8px;font-size:12.5px;line-height:1.5;}
  .tanpin-table td.val{font-size:15px;}
}
/* 団体ランチ 通常/プレミアム 刷新カード（平日/土日祝 2段価格・透過画像・2026-08-27 団体サイトと同期） */
.lch-course-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;max-width:740px;margin:0 auto;}
@media(min-width:768px){.lch-course-grid{gap:16px;}}
.lch-plan-img-wrap.contain{aspect-ratio:4/3;background:#F7F2E9;}
.lch-plan-img-wrap.contain img{object-fit:contain;}
.lch-plan-price.wt{display:flex;flex-wrap:wrap;gap:2px 14px;align-items:baseline;}
.lch-plan-price.wt .pr{white-space:nowrap;}
.lch-plan-price.wt .lbl{font-size:.64rem;color:#6b5a45;font-weight:600;margin-right:3px;letter-spacing:.02em;}
.lch-plan-price.wt .pr strong{font-size:1.08rem;}

/* sobataiken WPシェルは z-index 9999 の要素があるためモーダルを最前面へ（このページのみ） */
#planModal{z-index:100000;}
.sticky-cta{z-index:99999;}
</style>
</head>
<body class="wp-singular page page-template-default custom-background wp-theme-lightning fa_v7_css bootstrap4 device-pc">
<?php include "../header.php"; ?>

<!-- ===== 団体ランチ（houtoutaiken /launch/ ミラー 2026-09-03 mirror-jp-page） ===== -->
<main class="lch-main">
<a id="main"></a>

<!-- HERO: H1 のみ + 背景画像 + overlay（オーナー選択 A + 背景画像 2026-07-13） -->
<section id="hero" class="lch-hero" aria-labelledby="lch-h1">
  <div class="lch-hero-bg"></div>
  <div class="lch-hero-inner">
    <h1 id="lch-h1">河口湖の団体ランチ・宴会<span class="lch-hero-h1-sub">｜ 予約制で 最大100名対応（ほうとう）</span></h1>
  </div>
</section>

<!-- PLANS: ジャンル別セクション + 通常/プレミアム分離 -->
<section id="plans" class="lch-plans" aria-label="団体ランチのプラン一覧">

  <!-- 共通セット内容ブロック（全プランに何がついてくるかを1度だけ説明） -->
  <div class="lch-plan-common">
    <span class="lch-plan-common-title">プランの内容について</span>
    <p><strong>どのコースにも</strong>「小鉢（ひじきの煮物）」がつきます。</p>
    <p><strong>「プレミアムコース」</strong>は「アワビご飯」つきの特別セットです。</p>
    <p class="lch-plan-common-sub">※ お飲み物・デザートの内容はコースによって異なります。各コースの「セット内容」をご覧ください。</p>
    <p class="lch-plan-common-sub">※「ほうとう単品ランチ」は単品でのご提供です（小鉢・お飲み物なし）。</p>
  </div>

  <!-- ジャンル1：ほうとう（縦2段：通常3 → プレミアム2） -->
  <section class="lch-genre lch-genre--white" aria-labelledby="lch-genre-hoto">
    <div class="lch-genre-inner">
      <div class="lch-genre-head">
        <h2 id="lch-genre-hoto">山梨郷土料理ほうとうランチ</h2>
        <p class="lch-genre-note"><strong>セット内容</strong>：小鉢（ひじきの煮物）＋ お好みで「黒蜜きなこ餅」か「お飲み物（甲州ワイン・山梨ぶどうジュース）」を<strong>1つ選択</strong>。プレミアムはアワビご飯つき。</p>
      </div>

      <div class="lch-tier">
        <div class="lch-tier-head"><h3>通常コース</h3></div>
        <p class="lch-tier-note">小鉢（ひじきの煮物）＋ デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</p>
        <div class="lch-course-grid">
          <div class="lch-plan plan-card"
               data-plan-name="野菜ほうとう（通常コース）" data-plan-price="平日¥1,700／土日祝¥1,900（税込）/ 1名"
               data-plan-badge="定食" data-plan-badge-class="takeout"
               data-plan-includes='["<strong>野菜ほうとう</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</strong>","※アレルギー：小麦・大豆・かぼちゃ／詳細は事前にお問合せください"]'
               data-plan-href="../contact/" tabindex="0" role="button" aria-label="野菜ほうとう 通常コース 詳細を見る">
            <div class="lch-plan-img-wrap contain">
              <img src="../assets/dantai_fj_course_yasai_20260825.png" alt="野菜ほうとう 通常コース" loading="eager" fetchpriority="high">
            </div>
            <div class="lch-plan-body">
              <h3 class="lch-plan-name">野菜ほうとう</h3>
              <div class="lch-plan-price wt"><span class="pr"><span class="lbl">平日</span><strong>¥1,700</strong></span><span class="pr"><span class="lbl">土日祝</span><strong>¥1,900</strong></span></div>
              <div class="lch-plan-hint">タップで詳細</div>
            </div>
          </div>

          <div class="lch-plan plan-card"
               data-plan-name="肉入りほうとう（鹿・富士桜ポーク）通常コース" data-plan-price="平日¥2,000／土日祝¥2,200（税込）/ 1名"
               data-plan-badge="定食" data-plan-badge-class="takeout"
               data-plan-includes='["<strong>肉入りほうとう（鹿・富士桜ポークから選択）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</strong>","※アレルギー：小麦・大豆・かぼちゃ／詳細は事前にお問合せください"]'
               data-plan-href="../contact/" tabindex="0" role="button" aria-label="肉入りほうとう 鹿・富士桜ポーク 通常コース 詳細を見る">
            <div class="lch-plan-img-wrap contain">
              <img src="../assets/dantai_fj_course_shika_pork_20260825.png" alt="肉入りほうとう 鹿・富士桜ポーク 通常コース" loading="lazy">
            </div>
            <div class="lch-plan-body">
              <h3 class="lch-plan-name">肉入りほうとう（鹿・富士桜ポーク）</h3>
              <div class="lch-plan-price wt"><span class="pr"><span class="lbl">平日</span><strong>¥2,000</strong></span><span class="pr"><span class="lbl">土日祝</span><strong>¥2,200</strong></span></div>
              <div class="lch-plan-hint">タップで詳細</div>
            </div>
          </div>

          <div class="lch-plan plan-card"
               data-plan-name="肉入りほうとう（信玄鶏・馬）通常コース" data-plan-price="平日¥2,050／土日祝¥2,250（税込）/ 1名"
               data-plan-badge="定食" data-plan-badge-class="takeout"
               data-plan-includes='["<strong>肉入りほうとう（信玄鶏・馬から選択）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</strong>","※アレルギー：小麦・大豆・かぼちゃ／詳細は事前にお問合せください"]'
               data-plan-href="../contact/" tabindex="0" role="button" aria-label="肉入りほうとう 信玄鶏・馬 通常コース 詳細を見る">
            <div class="lch-plan-img-wrap contain">
              <img src="../assets/dantai_fj_course_shingen_horse_20260825.png" alt="肉入りほうとう 信玄鶏・馬 通常コース" loading="lazy">
            </div>
            <div class="lch-plan-body">
              <h3 class="lch-plan-name">肉入りほうとう（信玄鶏・馬）</h3>
              <div class="lch-plan-price wt"><span class="pr"><span class="lbl">平日</span><strong>¥2,050</strong></span><span class="pr"><span class="lbl">土日祝</span><strong>¥2,250</strong></span></div>
              <div class="lch-plan-hint">タップで詳細</div>
            </div>
          </div>

          <div class="lch-plan plan-card"
               data-plan-name="肉入りほうとう（ワインビーフ）通常コース" data-plan-price="平日¥2,300／土日祝¥2,500（税込）/ 1名"
               data-plan-badge="定食" data-plan-badge-class="takeout"
               data-plan-includes='["<strong>甲州ワインビーフほうとう</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</strong>","※アレルギー：小麦・大豆・かぼちゃ／詳細は事前にお問合せください"]'
               data-plan-href="../contact/" tabindex="0" role="button" aria-label="肉入りほうとう ワインビーフ 通常コース 詳細を見る">
            <div class="lch-plan-img-wrap contain">
              <img src="../assets/dantai_fj_course_winebeef_20260825.png" alt="肉入りほうとう ワインビーフ 通常コース" loading="lazy">
            </div>
            <div class="lch-plan-body">
              <h3 class="lch-plan-name">肉入りほうとう（ワインビーフ）</h3>
              <div class="lch-plan-price wt"><span class="pr"><span class="lbl">平日</span><strong>¥2,300</strong></span><span class="pr"><span class="lbl">土日祝</span><strong>¥2,500</strong></span></div>
              <div class="lch-plan-hint">タップで詳細</div>
            </div>
          </div>
        </div>
      </div>

      <div class="lch-tier lch-tier--premium">
        <div class="lch-tier-head"><h3>プレミアムコース</h3></div>
        <p class="lch-tier-note">通常コースに「アワビご飯」が追加された特別セット</p>
        <div class="lch-course-grid">
          <div class="lch-plan lch-plan--premium plan-card"
               data-plan-name="肉入りほうとう（鹿・富士桜ポーク）プレミアム" data-plan-price="平日¥2,700／土日祝¥2,900（税込）/ 1名"
               data-plan-badge="プレミアム" data-plan-badge-class="popular"
               data-plan-includes='["<strong>肉入りほうとう（鹿・富士桜ポークから選択）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</strong>","<strong>アワビご飯</strong>","※アレルギー：小麦・大豆・かぼちゃ・軟体類（アワビ）・きな粉／詳細は事前にお問合せください"]'
               data-plan-href="../contact/" tabindex="0" role="button" aria-label="肉入りほうとう 鹿・富士桜ポーク プレミアム 詳細を見る">
            <div class="lch-plan-img-wrap contain">
              <img src="../assets/dantai_fj_premium_shika_pork_20260825.png" alt="肉入りほうとう 鹿・富士桜ポーク プレミアム" loading="lazy">
              </div>
            <div class="lch-plan-body">
              <h3 class="lch-plan-name">肉入りほうとう（鹿・富士桜ポーク）プレミアム</h3>
              <div class="lch-plan-price wt"><span class="pr"><span class="lbl">平日</span><strong>¥2,700</strong></span><span class="pr"><span class="lbl">土日祝</span><strong>¥2,900</strong></span></div>
              <div class="lch-plan-hint">タップで詳細</div>
            </div>
          </div>

          <div class="lch-plan lch-plan--premium plan-card"
               data-plan-name="肉入りほうとう（信玄鶏・馬）プレミアム" data-plan-price="平日¥2,750／土日祝¥2,950（税込）/ 1名"
               data-plan-badge="プレミアム" data-plan-badge-class="popular"
               data-plan-includes='["<strong>肉入りほうとう（信玄鶏・馬から選択）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</strong>","<strong>アワビご飯</strong>","※アレルギー：小麦・大豆・かぼちゃ・軟体類（アワビ）・きな粉／詳細は事前にお問合せください"]'
               data-plan-href="../contact/" tabindex="0" role="button" aria-label="肉入りほうとう 信玄鶏・馬 プレミアム 詳細を見る">
            <div class="lch-plan-img-wrap contain">
              <img src="../assets/dantai_fj_premium_shingen_horse_20260825.png" alt="肉入りほうとう 信玄鶏・馬 プレミアム" loading="lazy">
              </div>
            <div class="lch-plan-body">
              <h3 class="lch-plan-name">肉入りほうとう（信玄鶏・馬）プレミアム</h3>
              <div class="lch-plan-price wt"><span class="pr"><span class="lbl">平日</span><strong>¥2,750</strong></span><span class="pr"><span class="lbl">土日祝</span><strong>¥2,950</strong></span></div>
              <div class="lch-plan-hint">タップで詳細</div>
            </div>
          </div>

          <div class="lch-plan lch-plan--premium plan-card"
               data-plan-name="肉入りほうとう（ワインビーフ）プレミアム" data-plan-price="平日¥3,000／土日祝¥3,200（税込）/ 1名"
               data-plan-badge="プレミアム" data-plan-badge-class="popular"
               data-plan-includes='["<strong>甲州ワインビーフほうとう</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>デザート（黒蜜きなこ餅）またはドリンク（甲州ワイン・ジュース）を選択</strong>","<strong>アワビご飯</strong>","※アレルギー：小麦・大豆・かぼちゃ・軟体類（アワビ）・きな粉／詳細は事前にお問合せください"]'
               data-plan-href="../contact/" tabindex="0" role="button" aria-label="肉入りほうとう ワインビーフ プレミアム 詳細を見る">
            <div class="lch-plan-img-wrap">
              <img src="../assets/dantai_hoto_winebeef_premium_20260716.jpg" alt="肉入りほうとう ワインビーフ プレミアム" loading="lazy">
              </div>
            <div class="lch-plan-body">
              <h3 class="lch-plan-name">肉入りほうとう（ワインビーフ）プレミアム</h3>
              <div class="lch-plan-price wt"><span class="pr"><span class="lbl">平日</span><strong>¥3,000</strong></span><span class="pr"><span class="lbl">土日祝</span><strong>¥3,200</strong></span></div>
              <div class="lch-plan-hint">タップで詳細</div>
            </div>
          </div>
        </div>
      </div>

      <p class="lch-genre-note" style="text-align:center;margin-top:8px;">※表示は平日／土日祝の料金です。<strong>高校生以下の学生</strong>は全メニュー<strong>平日料金からさらに−100円引き</strong>（要予約）。単品（麺のみ）は下段をご覧ください。</p>
      <div class="lch-genre-cta">
        <a href="../contact/">ほうとうで見積を依頼する</a>
      </div>
    </div>
  </section>

  <!-- ジャンル1.5：ほうとう単品ランチ（2026-08-19 団体サイトと同期・MTG 2026-08-18 決定） -->
  <section class="lch-genre lch-genre--alt" aria-labelledby="lch-genre-tanpin">
    <div class="lch-genre-inner">
      <div class="lch-genre-head">
        <h2 id="lch-genre-tanpin">ほうとう単品ランチ</h2>
        <p>小鉢・お飲み物なしの単品プランです。肉入り・野菜ほうとうは土日祝もご利用いただけます（平日は200円引き）。<br>学生プランは平日限定・要予約です。</p>
      </div>
      <div class="tanpin-table-wrap">
        <table class="tanpin-table">
          <thead>
            <tr><th>プラン</th><th class="num">平日</th><th class="num">土日祝</th></tr>
          </thead>
          <tbody>
            <tr><td>野菜ほうとう</td><td class="val">¥1,300</td><td class="val">¥1,500</td></tr>
            <tr><td>肉入りほうとう（鹿・富士桜ポーク）</td><td class="val">¥1,600</td><td class="val">¥1,800</td></tr>
            <tr><td>肉入りほうとう（信玄鶏・馬）</td><td class="val">¥1,650</td><td class="val">¥1,850</td></tr>
            <tr><td>肉入りほうとう（ワインビーフ）</td><td class="val">¥1,900</td><td class="val">¥2,100</td></tr>
          </tbody>
        </table>
      </div>
      <p class="lch-genre-note" style="margin-top:20px;">※こちらは<strong>単品（麺のみ・小鉢/お飲み物なし）</strong>の料金です。小鉢＋デザート/ドリンク付きの<strong>通常コース・プレミアム</strong>は上部「山梨郷土料理ほうとうランチ」をご覧ください。</p>
      <p class="lch-genre-note" style="margin-top:8px;">※<strong>高校生以下の学生</strong>は、全メニュー<strong>平日料金からさらに−100円引き</strong>（要予約・修学旅行や遠足などの学校団体歓迎）。</p>
      <div class="lch-genre-cta">
        <a href="../contact/">単品ランチで見積を依頼する</a>
      </div>
    </div>
  </section>

  <!-- ジャンル2：そば（上下段：通常3 → プレミアム3、同順対称） -->
  <section class="lch-genre lch-genre--white" aria-labelledby="lch-genre-soba">
    <div class="lch-genre-inner">
      <div class="lch-genre-head">
        <h2 id="lch-genre-soba">富士山麓そばランチ</h2>
        <p class="lch-genre-note">温かい汁そばでご提供します</p>
        <p class="lch-genre-note"><strong>セット内容</strong>：小鉢（ひじきの煮物）＋ お飲み物（甲州ワイン・山梨ぶどうジュース）。プレミアムは黒蜜きなこ餅・アワビご飯つき。</p>
      </div>

      <div class="lch-tier">
          <div class="lch-tier-head"><h3>通常コース</h3></div>
          <p class="lch-tier-note">小鉢（ひじきの煮物）とお飲み物（甲州ワインまたは山梨ぶどうジュース）付き</p>
          <div class="lch-plan-grid lch-plan-grid--quad2">
            <div class="lch-plan plan-card"
                 data-plan-name="鹿肉そば" data-plan-price="¥1,850（税込）/ 1名"
                 data-plan-badge="単品" data-plan-badge-class="takeout"
                 data-plan-includes='["<strong>鹿肉そば</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","※アレルギー：卵・小麦・そば・大豆／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="鹿肉そば 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_soba_shika_20260717.jpg" alt="鹿肉そば" loading="lazy">
                </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">鹿肉そば</h3>
                <div class="lch-plan-price"><strong>¥1,850</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>

            

            <div class="lch-plan plan-card"
                 data-plan-name="甲州ワインビーフそば" data-plan-price="¥2,000（税込）/ 1名"
                 data-plan-badge="単品" data-plan-badge-class="takeout"
                 data-plan-includes='["<strong>甲州ワインビーフそば</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","※アレルギー：卵・小麦・そば・大豆／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="甲州ワインビーフそば 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_soba_winebeef_20260717.jpg" alt="甲州ワインビーフそば" loading="lazy">
                </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">甲州ワインビーフそば</h3>
                <div class="lch-plan-price"><strong>¥2,000</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>
          </div>
        </div>

        <div class="lch-tier lch-tier--premium">
          <div class="lch-tier-head"><h3>プレミアムコース</h3></div>
          <p class="lch-tier-note">通常コースに「アワビご飯・黒蜜きなこ餅」が追加された特別セット</p>
          <div class="lch-plan-grid lch-plan-grid--quad2">
            <div class="lch-plan lch-plan--premium plan-card"
                 data-plan-name="鹿肉そば プレミアム" data-plan-price="¥2,550（税込）/ 1名"
                 data-plan-badge="プレミアム" data-plan-badge-class="popular"
                 data-plan-includes='["<strong>鹿肉そば</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","<strong>黒蜜きなこ餅</strong>","<strong>アワビご飯</strong>","※アレルギー：卵・小麦・そば・大豆・軟体類（アワビ）・きな粉／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="鹿肉そば プレミアム 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_soba_shika_premium_20260717.jpg" alt="鹿肉そば プレミアム" loading="lazy">
              </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">鹿肉そば プレミアム</h3>
                <div class="lch-plan-price"><strong>¥2,550</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>

            

            <div class="lch-plan lch-plan--premium plan-card"
                 data-plan-name="甲州ワインビーフそば プレミアム" data-plan-price="¥2,700（税込）/ 1名"
                 data-plan-badge="プレミアム" data-plan-badge-class="popular"
                 data-plan-includes='["<strong>甲州ワインビーフそば</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","<strong>黒蜜きなこ餅</strong>","<strong>アワビご飯</strong>","※アレルギー：卵・小麦・そば・大豆・軟体類（アワビ）・きな粉／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="甲州ワインビーフそば プレミアム 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_soba_winebeef_premium_20260717.jpg" alt="甲州ワインビーフそば プレミアム" loading="lazy">
              </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">甲州ワインビーフそば プレミアム</h3>
                <div class="lch-plan-price"><strong>¥2,700</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>
          </div>
        </div>

      <div class="lch-genre-cta">
        <a href="../contact/">そばで見積を依頼する</a>
      </div>
    </div>
  </section>

  <!-- ジャンル3：吉田のうどん（PC 4列横並び：通常2 + プレミアム2、同順対称） -->
  <section class="lch-genre lch-genre--alt" aria-labelledby="lch-genre-udon">
    <div class="lch-genre-inner">
      <div class="lch-genre-head">
        <h2 id="lch-genre-udon">吉田のうどんランチ</h2>
        <p class="lch-genre-note"><strong>セット内容</strong>：小鉢（ひじきの煮物）＋ お飲み物（甲州ワイン・山梨ぶどうジュース）。プレミアムは黒蜜きなこ餅・アワビご飯つき。</p>
      </div>

      <div class="lch-tier">
        <div class="lch-tier-head"><h3>通常コース</h3></div>
        <p class="lch-tier-note">小鉢（ひじきの煮物）とお飲み物（甲州ワインまたは山梨ぶどうジュース）付き</p>
        <div class="lch-plan-grid lch-plan-grid--quad2">
          <div class="lch-plan plan-card"
               data-plan-name="鹿肉うどん" data-plan-price="¥1,850（税込）/ 1名"
                 data-plan-badge="単品" data-plan-badge-class="takeout"
                 data-plan-includes='["<strong>鹿肉うどん（吉田のうどん）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","※アレルギー：小麦・大豆・さば・いわし／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="鹿肉うどん 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_udon_shika_20260716.jpg" alt="鹿肉うどん" loading="lazy">
                </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">鹿肉うどん</h3>
                <div class="lch-plan-price"><strong>¥1,850</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>

            <div class="lch-plan plan-card"
                 data-plan-name="甲州ワインビーフうどん" data-plan-price="¥2,000（税込）/ 1名"
                 data-plan-badge="単品" data-plan-badge-class="takeout"
                 data-plan-includes='["<strong>甲州ワインビーフうどん（吉田のうどん）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","※アレルギー：小麦・大豆・さば・いわし／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="甲州ワインビーフうどん 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_udon_winebeef_20260716.jpg" alt="甲州ワインビーフうどん" loading="lazy">
                </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">甲州ワインビーフうどん</h3>
                <div class="lch-plan-price"><strong>¥2,000</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>
          </div>
        </div>

        <div class="lch-tier lch-tier--premium">
          <div class="lch-tier-head"><h3>プレミアムコース</h3></div>
          <p class="lch-tier-note">通常コースに「アワビご飯・黒蜜きなこ餅」が追加された特別セット</p>
          <div class="lch-plan-grid lch-plan-grid--quad2">
            <div class="lch-plan lch-plan--premium plan-card"
                 data-plan-name="鹿肉うどん プレミアム" data-plan-price="¥2,550（税込）/ 1名"
                 data-plan-badge="プレミアム" data-plan-badge-class="popular"
                 data-plan-includes='["<strong>鹿肉うどん（吉田のうどん）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","<strong>黒蜜きなこ餅</strong>","<strong>アワビご飯</strong>","※アレルギー：小麦・大豆・さば・いわし・軟体類（アワビ）・きな粉／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="鹿肉うどん プレミアム 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_udon_shika_premium_20260716.jpg" alt="鹿肉うどん プレミアム" loading="lazy">
              </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">鹿肉うどん プレミアム</h3>
                <div class="lch-plan-price"><strong>¥2,550</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>

            <div class="lch-plan lch-plan--premium plan-card"
                 data-plan-name="甲州ワインビーフうどん プレミアム" data-plan-price="¥2,700（税込）/ 1名"
                 data-plan-badge="プレミアム" data-plan-badge-class="popular"
                 data-plan-includes='["<strong>甲州ワインビーフうどん（吉田のうどん）</strong>","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","<strong>黒蜜きなこ餅</strong>","<strong>アワビご飯</strong>","※アレルギー：小麦・大豆・さば・いわし・軟体類（アワビ）・きな粉／詳細は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="甲州ワインビーフうどん プレミアム 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_udon_winebeef_premium_20260716.jpg" alt="甲州ワインビーフうどん プレミアム" loading="lazy">
              </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">甲州ワインビーフうどん プレミアム</h3>
                <div class="lch-plan-price"><strong>¥2,700</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>
          </div>
        </div>

      <div class="lch-genre-cta">
        <a href="../contact/">うどんで見積を依頼する</a>
      </div>
    </div>
  </section>

  <!-- ジャンル4：焼肉定食（PC 4列横並び：通常2 + プレミアム2、同順対称） -->
  <section class="lch-genre lch-genre--white" aria-labelledby="lch-genre-yakiniku">
    <div class="lch-genre-inner">
      <div class="lch-genre-head">
        <h2 id="lch-genre-yakiniku">山梨ジビエ焼肉ランチ</h2>
        <p class="lch-genre-note"><strong>セット内容</strong>：小鉢（ひじきの煮物）＋ 白ごはん ＋ ミニ吉田のうどん または ミニほうとう（＋¥200）＋ お飲み物（甲州ワイン・山梨ぶどうジュース）。プレミアムは白ごはん→アワビご飯・黒蜜きなこ餅つき。</p>
      </div>

      <div class="lch-tier">
        <div class="lch-tier-head"><h3>通常コース</h3></div>
        <p class="lch-tier-note">小鉢（ひじきの煮物）・白ごはん・ミニ吉田のうどん または ミニほうとう（＋¥200）・お飲み物（甲州ワインまたは山梨ぶどうジュース）付き</p>
        <div class="lch-plan-grid lch-plan-grid--quad2">
          <div class="lch-plan plan-card"
               data-plan-name="ハーフ＆ハーフ焼肉定食" data-plan-price="¥2,200（税込）/ 1名"
                 data-plan-badge="単品" data-plan-badge-class="takeout"
                 data-plan-includes='["<strong>ハーフ＆ハーフ焼肉</strong>（鹿肉100g・甲州ワインビーフ100g／合計200g/人）","<strong>白ご飯</strong>","<strong>ミニ吉田のうどん</strong> または <strong>ミニほうとう</strong>（ミニほうとうは＋200円）","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","※アレルギー：小麦・大豆・かぼちゃ（ミニほうとう選択時）・さば・いわし（ミニ吉田のうどん選択時）／焼肉タレの成分は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="ハーフ＆ハーフ焼肉定食 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_yakiniku_halfhalf_20260716.jpg" alt="ハーフ＆ハーフ焼肉定食" loading="lazy">
                </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">ハーフ＆ハーフ<br>焼肉定食</h3>
                <div class="lch-plan-price"><strong>¥2,200</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>

            <div class="lch-plan plan-card"
                 data-plan-name="ワインビーフ焼肉定食" data-plan-price="¥2,400（税込）/ 1名"
                 data-plan-badge="単品" data-plan-badge-class="takeout"
                 data-plan-includes='["<strong>甲州ワインビーフ焼肉</strong>（200g/人）","<strong>白ご飯</strong>","<strong>ミニ吉田のうどん</strong> または <strong>ミニほうとう</strong>（ミニほうとうは＋200円）","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","※アレルギー：小麦・大豆・かぼちゃ（ミニほうとう選択時）・さば・いわし（ミニ吉田のうどん選択時）／焼肉タレの成分は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="ワインビーフ焼肉定食 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_yakiniku_winebeef_20260716.jpg" alt="ワインビーフ焼肉定食" loading="lazy">
                </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">ワインビーフ<br>焼肉定食</h3>
                <div class="lch-plan-price"><strong>¥2,400</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>
          </div>
        </div>

        <div class="lch-tier lch-tier--premium">
          <div class="lch-tier-head"><h3>プレミアムコース</h3></div>
          <p class="lch-tier-note">通常コースの白ごはんが「アワビご飯」に変わり、「黒蜜きなこ餅」が付く特別セット</p>
          <div class="lch-plan-grid lch-plan-grid--quad2">
            <div class="lch-plan lch-plan--premium plan-card"
                 data-plan-name="ハーフ＆ハーフ焼肉定食 プレミアム" data-plan-price="¥2,900（税込）/ 1名"
                 data-plan-badge="プレミアム" data-plan-badge-class="popular"
                 data-plan-includes='["<strong>ハーフ＆ハーフ焼肉</strong>（鹿肉100g・甲州ワインビーフ100g／合計200g/人）","<strong>ミニ吉田のうどん</strong> または <strong>ミニほうとう</strong>（ミニほうとうは＋200円）","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","<strong>アワビご飯</strong>","<strong>黒蜜きなこ餅</strong>","※アレルギー：小麦・大豆・かぼちゃ（ミニほうとう選択時）・さば・いわし（ミニ吉田のうどん選択時）・軟体類（アワビ）・きな粉／焼肉タレの成分は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="ハーフ＆ハーフ焼肉定食 プレミアム 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_yakiniku_halfhalf_premium_20260716.jpg" alt="ハーフ＆ハーフ焼肉定食 プレミアム" loading="lazy">
              </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">ハーフ＆ハーフ焼肉定食 プレミアム</h3>
                <div class="lch-plan-price"><strong>¥2,900</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>

            <div class="lch-plan lch-plan--premium plan-card"
                 data-plan-name="ワインビーフ焼肉定食 プレミアム" data-plan-price="¥3,100（税込）/ 1名"
                 data-plan-badge="プレミアム" data-plan-badge-class="popular"
                 data-plan-includes='["<strong>甲州ワインビーフ焼肉</strong>（200g/人）","<strong>ミニ吉田のうどん</strong> または <strong>ミニほうとう</strong>（ミニほうとうは＋200円）","<strong>小鉢：ひじきの煮物</strong> — 山梨郷土の家庭料理・富士登山の縁起物","<strong>甲州ワイン</strong> または <strong>山梨ぶどうジュース</strong>","<strong>アワビご飯</strong>","<strong>黒蜜きなこ餅</strong>","※アレルギー：小麦・大豆・かぼちゃ（ミニほうとう選択時）・さば・いわし（ミニ吉田のうどん選択時）・軟体類（アワビ）・きな粉／焼肉タレの成分は事前にお問合せください"]'
                 data-plan-href="../contact/" tabindex="0" role="button" aria-label="ワインビーフ焼肉定食 プレミアム 詳細を見る">
              <div class="lch-plan-img-wrap">
                <img src="../assets/dantai_yakiniku_winebeef_premium_20260716.jpg" alt="ワインビーフ焼肉定食 プレミアム" loading="lazy">
              </div>
              <div class="lch-plan-body">
                <h3 class="lch-plan-name">ワインビーフ焼肉定食 プレミアム</h3>
                <div class="lch-plan-price"><strong>¥3,100</strong><small>（税込）/ 1名</small></div>
                <div class="lch-plan-hint">タップで詳細</div>
              </div>
            </div>
          </div>
        </div>

      <div class="lch-genre-cta">
        <a href="../contact/">焼肉で見積を依頼する</a>
      </div>
    </div>
  </section>

</section>

<!-- CONDITIONS -->
<section id="conditions" class="lch-section lch-conditions" aria-labelledby="lch-cond-h">
  <div class="lch-section-inner">
    <h2 id="lch-cond-h">対応可能人数・運用条件</h2>
    <p class="lch-section-lead">お食事の対応可能な人数・条件をまとめました。全プラン下限 <strong>2 名</strong>から承ります。ご不明点はお気軽にご相談ください。</p>

    <div class="lch-cond-bento">
      <div class="lch-cond-item">
        <div class="lch-cond-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21a9 9 0 0 0 9-9H3a9 9 0 0 0 9 9Z"/><path d="M7 21h10"/><path d="M19.5 12 22 6"/><path d="M16 8c.27.1.8.53.75 1.36-.06.83-.75 1.68-.75 2.64"/><path d="M11 8c.27.1.8.53.74 1.36-.05.83-.74 1.68-.74 2.64"/><path d="M6 8c.27.1.8.53.75 1.36-.06.83-.75 1.68-.75 2.64"/></svg>
        </div>
        <div class="lch-cond-body">
          <h3>ほうとう：最大 <strong>100 名</strong></h3>
          <ul>
            <li><strong>20 名以上</strong>：4〜5 名用の大鍋を複数台に分けて<strong>シェア</strong>（グループで鍋を囲む形）</li>
            <li><strong>80 名超</strong>：一部のお客様は向かいの系列店舗（<strong>保護猫カフェ</strong>）でお食事</li>
            <li><strong>猫アレルギー</strong>の方は事前にご相談ください</li>
          </ul>
        </div>
      </div>

      <div class="lch-cond-item">
        <div class="lch-cond-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>
        </div>
        <div class="lch-cond-body">
          <h3>焼肉:最大 <strong>30 名</strong></h3>
          <ul>
            <li>最大 <strong>30 名</strong>までご受付可能</li>
            <li><strong>1 人 1 台</strong>のミニコンロで席焼き</li>
            <li>1 人あたりお肉 <strong>200g</strong></li>
          </ul>
        </div>
      </div>

      <div class="lch-cond-item">
        <div class="lch-cond-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/></svg>
        </div>
        <div class="lch-cond-body">
          <h3>そば・うどん：最大 <strong>20 名</strong></h3>
          <ul>
            <li>最大 <strong>20 名</strong>までご受付可能</li>
            <li><strong>温かい</strong>汁そば・汁うどんでご提供</li>
          </ul>
        </div>
      </div>

      <div class="lch-cond-item">
        <div class="lch-cond-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
        </div>
        <div class="lch-cond-body">
          <h3>アレルギー個別対応</h3>
          <ul>
            <li>事前のお申し出で可能な範囲で<strong>個別対応</strong></li>
            <li>ご予約時にご相談ください</li>
          </ul>
        </div>
      </div>

      <div class="lch-cond-item">
        <div class="lch-cond-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <div class="lch-cond-body">
          <h3>お支払い方法</h3>
          <ul>
            <li>現金</li>
            <li>クレジットカード（VISA・Master・AMEX）</li>
            <li>QR 決済</li>
            <li><strong>請求書対応</strong>もご相談ください（旅行会社様歓迎）</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="lch-section lch-faq" aria-labelledby="lch-faq-h">
  <div class="lch-section-inner">
    <h2 id="lch-faq-h">よくあるご質問</h2>
    <p class="lch-section-lead">お問い合わせ前によくいただくご質問をまとめました。その他はお気軽にご相談ください。</p>

    <div class="lch-faq-list">
      <details>
        <summary>ご予約方法を教えてください</summary>
        <div>
          <p>下記いずれかの方法でご予約・お問い合わせを承っております。</p>
          <ul>
            <li>公式LINE</li>
            <li>メール</li>
            <li>WhatsApp</li>
            <li>お電話（050-6882-5580）</li>
          </ul>
          <p>ご希望のプラン・人数・日時をお知らせいただければ、こちらから空き状況・お見積りをご連絡します。</p>
        </div>
      </details>

      <details>
        <summary>キャンセルポリシーを教えてください</summary>
        <div>
          <p>ご予約日の5日前よりキャンセル料が発生します。</p>
          <ul>
            <li>開催 2〜5 日前：30%</li>
            <li>開催 前日：50%</li>
            <li>開催 当日・無断キャンセル：100%</li>
          </ul>
          <p>ただし、数名の欠員（体調不良等）であればキャンセル料は発生しません。柔軟に対応します。</p>
        </div>
      </details>

      <details>
        <summary>アレルギー対応は可能ですか？</summary>
        <div>
          <p>可能な範囲で個別対応いたします。特定原材料（小麦・そば・卵・乳・落花生・えび・かに）を中心に、ご予約時に必ず事前にご相談ください。</p>
        </div>
      </details>

      <details>
        <summary>大型バスの駐車は可能ですか？</summary>
        <div>
          <p>無料駐車場をご用意しております（観光バス駐車可）。</p>
          <p>台数のご相談は事前にご連絡ください。中央自動車道「河口湖IC」より約5分の立地です。</p>
        </div>
      </details>

      <details>
        <summary>お食事の所要時間はどれくらいですか？</summary>
        <div>
          <p>お食事のみの場合、1時間〜1時間半程度が目安です。人数・プラン・時間帯によって前後します。</p>
          <p>ほうとう体験・藍染体験など、体験メニューとの組み合わせも承っておりますのでご相談ください。</p>
        </div>
      </details>

      <details>
        <summary>お支払い方法・請求書対応について</summary>
        <div>
          <p>現金・クレジットカードに対応しております。</p>
          <p>旅行会社様・企業様向けに請求書によるお支払いも対応可能です。ご予約時にお申し出ください。</p>
        </div>
      </details>

      <details>
        <summary>雨天時はどうなりますか？</summary>
        <div>
          <p>お食事はすべて屋内席でのご提供のため、雨天でも予定通り開催できます。<br>屋外イベントとの組み合わせなど、当日の状況に応じた柔軟な対応をご相談ください。</p>
        </div>
      </details>

      <details>
        <summary>15名以下でも団体対応してもらえますか？</summary>
        <div>
          <p>2名様からご予約いただけます。少人数から30名までのご利用に対応可能です。</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ACCESS -->
<section id="access" class="lch-section lch-access" aria-labelledby="lch-access-h">
  <div class="lch-section-inner">
    <h2 id="lch-access-h">アクセス</h2>
    <p class="lch-section-lead">河口湖・山中湖・甲府・昇仙峡方面から、団体様の観光ルートに組み込みやすい立地です。</p>

    <!-- 交通アクセス（フラット情報リスト・文言はサイト内既存情報 access/index.html から引用）
         PC(≥900px): 左=情報リスト / 右=地図 の 2 カラム
         SP(<900px): 縦積み（情報→地図・gap:32px 確保）
         強調方針: 全 4 項目を同一スタイル（フラット）— 強調差の意図不明を回避 -->
    <div class="lch-access-pc-layout">
    <div class="lch-access-b-flat">
      <div class="flat-row">
        <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M4 12h16"/><circle cx="8" cy="16" r=".9" fill="currentColor"/><circle cx="16" cy="16" r=".9" fill="currentColor"/></svg>
        <div class="txt">
          <span class="l">富士急行線「河口湖駅」から徒歩 <strong>12</strong> 分</span>
          <span class="sub">新宿駅から特急「富士回遊」で河口湖駅まで直通 約1h50m</span>
        </div>
      </div>
      <div class="flat-row">
        <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l1.5-4.5C6.79 6.51 7.42 6 8.4 6h7.2c.98 0 1.61.51 1.9 1.5L19 12"/><path d="M5 12h14v6h-3v-2H8v2H5v-6z"/><circle cx="8" cy="15" r=".9" fill="currentColor"/><circle cx="16" cy="15" r=".9" fill="currentColor"/></svg>
        <div class="txt">
          <span class="l">中央自動車道「河口湖IC」から約 <strong>5</strong> 分</span>
          <span class="sub">店舗前に無料駐車場あり（大型観光バス駐車可）</span>
        </div>
      </div>
      <div class="flat-row">
        <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="5" width="16" height="12" rx="2"/><path d="M4 12h16"/><circle cx="8" cy="16" r=".9" fill="currentColor"/><circle cx="16" cy="16" r=".9" fill="currentColor"/></svg>
        <div class="txt">
          <span class="l">河口湖駅から富士急バス →「船津」バス停 徒歩 <strong>3</strong> 分</span>
          <span class="sub">路線バスをご利用の方</span>
        </div>
      </div>
      <div class="flat-row">
        <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
        <div class="txt">
          <span class="l">営業時間 <strong>9:30〜20:00（最終入店18:00）</strong></span>
          <span class="sub">不定休</span>
        </div>
      </div>
    </div>

    <!-- 地図 -->
    <div class="lch-access-map">
      <iframe src="https://www.google.com/maps?q=%E5%B1%B1%E6%A2%A8%E7%9C%8C%E5%8D%97%E9%83%BD%E7%95%99%E9%83%A1%E5%AF%8C%E5%A3%AB%E6%B2%B3%E5%8F%A3%E6%B9%96%E7%94%BA%E8%88%B9%E6%B4%A53376-3&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="富士家 地図"></iframe>
    </div>
    </div><!-- /.lch-access-pc-layout -->

    <div class="lch-access-address">
      <strong>高菜先生の郷土料理体験教室 富士家</strong>
      〒401-0301 山梨県南都留郡富士河口湖町船津3376-3<br>
      TEL 050-6882-5580
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section id="final-cta" class="lch-final" aria-labelledby="lch-final-h">
  <div class="lch-final-inner">
    <h2 id="lch-final-h">まずは空き状況・お見積りをご相談ください</h2>
    <p>LINE ／ メール ／ WhatsApp ／ お電話 で承ります。<br>ご希望のプラン・人数・日時をお知らせください。</p>
    <a href="../contact/" class="btn-primary">団体枠の空き状況を確認する</a>
    <p class="lch-hero-micro">見積・相談は無料 ／ 開催5日前より前ならキャンセル料無料 ／ 数名の欠員は柔軟対応</p>
  </div>
</section>

</main>

<div class="sticky-cta">
  <a href="../contact/">
    <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
    団体枠の空き状況を確認する
  </a>
</div>

<!-- プラン詳細モーダル（menu/#planModal と共通 openPlanModal で駆動） -->
<div id="planModal" class="plan-modal" role="dialog" aria-modal="true" aria-hidden="true" onclick="if(event.target===this)closePlanModal()">
  <div class="plan-modal-inner">
    <div class="plan-modal-header">
      <div class="plan-modal-drag"></div>
      <button class="plan-modal-close" onclick="closePlanModal()" aria-label="閉じる">✕</button>
    </div>
    <img class="plan-modal-img" id="planModalImg" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%221%22%20height%3D%221%22%2F%3E" alt="">
    <div class="plan-modal-content">
      <span class="plan-badge" id="planModalBadge"></span>
      <h3 class="plan-modal-name" id="planModalName"></h3>
      <div class="plan-modal-price" id="planModalPrice"></div>
      <div class="plan-modal-includes">
        <div class="plan-modal-includes-title">セット内容</div>
        <ul id="planModalList"></ul>
      </div>
      <div id="planModalNote" class="plan-modal-note" style="display:none"></div>
      <button id="planModalVideoBtn" class="btn-video-plan" style="display:none" onclick="openVideoModal(this.getAttribute('data-video-src'))">▶ 動画を見る</button>
      <a class="btn-primary plan-modal-cta" id="planModalCta" href="../contact/">このプランで予約する</a>
    </div>
  </div>
</div>



<?php include "../footer.php"; ?>
<script type="text/javascript" src="../js/lib.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script src="../assets/dantai-page.js?v=202609031830"></script>
</body>
</html>
