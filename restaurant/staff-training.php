<?php
$page_title = 'スタッフ教育・マニュアル作成 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：メニュー・オペレーション';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">スタッフ教育・マニュアル作成</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">新人教育の時間を短縮し、サービス品質を均一化。AIを活用したマニュアル作成と教育コンテンツの効率的な作り方を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">AIでマニュアルを作成するメリット</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">⚡</div>
                <h3 class="font-bold">作成時間の短縮</h3>
                <p class="text-sm text-gray-600">ゼロから書く手間を大幅削減</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📝</div>
                <h3 class="font-bold">抜け漏れ防止</h3>
                <p class="text-sm text-gray-600">AIが網羅的に項目を提案</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">🔄</div>
                <h3 class="font-bold">更新が簡単</h3>
                <p class="text-sm text-gray-600">変更点をAIに伝えて即修正</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">業務マニュアルの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-amber-600">接客マニュアル</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    カジュアルイタリアンレストランの接客マニュアルを作成してください。<br><br>
                    【店舗情報】<br>
                    ・業態：カジュアルイタリアン<br>
                    ・客単価：ランチ1,500円、ディナー3,500円<br>
                    ・ターゲット：20-40代、カップル・女性グループ<br>
                    ・雰囲気：フレンドリーだが丁寧<br><br>
                    【含めてほしい内容】<br>
                    1. 入店時の対応<br>
                    2. 注文の取り方<br>
                    3. 料理提供時の説明<br>
                    4. 会計時の対応<br>
                    5. クレーム対応の基本<br>
                    6. よく使うフレーズ集<br><br>
                    新人アルバイトでも分かりやすい言葉で作成してください。
                </p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">調理マニュアル</h3>
            <div class="bg-gray-100 p-4 rounded">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下のレシピを、新人スタッフ向けの調理マニュアル形式に変換してください。<br><br>
                    【レシピ】<br>
                    カルボナーラ（材料と手順をここに記載）<br><br>
                    【条件】<br>
                    ・各手順を詳細に分解<br>
                    ・写真を入れるべきポイントを「📷」で示す<br>
                    ・失敗しやすいポイントを「⚠️注意」で強調<br>
                    ・タイマーを使うべき箇所を明記<br>
                    ・完成の目安（見た目、香り）を記載
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">教育クイズの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">理解度チェッククイズ</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    飲食店の新人教育用クイズを10問作成してください。<br><br>
                    【テーマ】食品衛生の基本<br><br>
                    【形式】<br>
                    ・4択問題<br>
                    ・正解と解説付き<br>
                    ・実際の業務に関連した内容<br><br>
                    【含めてほしいトピック】<br>
                    ・手洗いのタイミング<br>
                    ・食材の保管温度<br>
                    ・賞味期限・消費期限<br>
                    ・アレルギー対応
                </p>
            </div>

            <div class="bg-amber-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm">
                    Q1. 調理前に手を洗う際、正しいのはどれ？<br>
                    A) 水だけで10秒洗う<br>
                    B) 石鹸で30秒以上洗い、流水で流す ✓<br>
                    C) アルコール消毒だけでOK<br>
                    D) 手袋をすれば洗わなくてよい<br><br>
                    【解説】厚労省のガイドラインでは、石鹸で30秒以上…
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">トラブル対応マニュアル</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">クレーム対応シナリオ</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    飲食店でよくあるクレームシーンとその対応方法を<br>
                    ロールプレイ形式で5パターン作成してください。<br><br>
                    【シーン例】<br>
                    1. 料理の提供が遅い<br>
                    2. 料理に異物混入<br>
                    3. 注文と違う料理が来た<br>
                    4. 味についてのクレーム<br>
                    5. 予約が入っていなかった<br><br>
                    【含める内容】<br>
                    ・お客様のセリフ例<br>
                    ・スタッフの対応（NGとOKの両方）<br>
                    ・対応のポイント解説<br>
                    ・報告すべき相手（店長など）
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">マニュアルの共有方法</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-2xl mr-4">📱</span>
                <div>
                    <h4 class="font-bold">Googleドキュメント</h4>
                    <p class="text-sm text-gray-600">スマホから閲覧可能。リアルタイム更新が反映。リンクを共有するだけ。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-2xl mr-4">📹</span>
                <div>
                    <h4 class="font-bold">動画マニュアル</h4>
                    <p class="text-sm text-gray-600">調理手順などはスマホで撮影。YouTubeの限定公開で共有。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-2xl mr-4">💬</span>
                <div>
                    <h4 class="font-bold">LINEグループ</h4>
                    <p class="text-sm text-gray-600">ノート機能にマニュアルのリンクを固定。いつでもアクセス可能。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">マニュアルは「作って終わり」ではなく「使われてなんぼ」です。AIで素早く作成し、実際に使いながら改善を重ねていきましょう。スタッフからのフィードバックをもとに、AIで修正するのも効率的です。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="inventory-management.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：在庫管理
        </a>
        <a href="customer-analysis.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：顧客分析・売上予測
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
