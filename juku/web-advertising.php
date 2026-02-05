<?php
$page_title = 'Web広告・チラシ作成 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'marketing';
$section_name = '第2部：集客・マーケティング';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">Web広告・チラシ作成</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">AIを活用してキャッチコピーや広告文を作成。Web広告から折込チラシまで、効果的な宣伝物の作り方を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">キャッチコピーの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">キャッチコピー作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    学習塾の広告用キャッチコピーを10個作成してください。<br><br>
                    【塾の特徴】<br>
                    ・個別指導塾<br>
                    ・対象：中学生<br>
                    ・強み：定期テストで成績アップ実績多数<br>
                    ・地域：〇〇市<br><br>
                    【ターゲット】<br>
                    ・子どもの成績に悩む保護者<br>
                    ・集団塾についていけなかった生徒<br><br>
                    【条件】<br>
                    ・20文字以内<br>
                    ・保護者の悩みに刺さる<br>
                    ・行動を促す表現
                </p>
            </div>
            <div class="bg-indigo-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <ul class="text-sm space-y-1">
                    <li>• 「分かるまで、あきらめない。」</li>
                    <li>• 「次のテストで、笑顔に変わる。」</li>
                    <li>• 「ついていけない、がなくなる塾。」</li>
                    <li>• 「うちの子、変わった。」</li>
                    <li>• 「苦手は、伸びしろです。」</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">チラシの構成作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">チラシ構成のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    学習塾の折込チラシの構成案を作成してください。<br><br>
                    【目的】夏期講習の生徒募集<br>
                    【サイズ】A4片面<br><br>
                    【含めたい要素】<br>
                    ・キャッチコピー<br>
                    ・夏期講習の特徴（3つ程度）<br>
                    ・対象学年と料金<br>
                    ・期間<br>
                    ・特典（早期申込割引など）<br>
                    ・連絡先・地図<br><br>
                    【条件】<br>
                    ・レイアウトの配置も提案<br>
                    ・各要素の文案も作成<br>
                    ・保護者の目を引くデザインの方向性も提案
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">リスティング広告の文案</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">Google広告文の作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    学習塾のGoogle検索広告用の広告文を作成してください。<br><br>
                    【キーワード】「〇〇市 塾」「〇〇市 個別指導」<br><br>
                    【塾の強み】<br>
                    ・地域密着20年<br>
                    ・定期テスト対策に強い<br>
                    ・無料体験実施中<br><br>
                    【広告形式】<br>
                    ・見出し1：30文字以内<br>
                    ・見出し2：30文字以内<br>
                    ・見出し3：30文字以内<br>
                    ・説明文1：90文字以内<br>
                    ・説明文2：90文字以内<br><br>
                    5パターン作成してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Canvaでの作成手順</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-indigo-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                <div>
                    <h4 class="font-bold">テンプレートを選ぶ</h4>
                    <p class="text-sm text-gray-600">Canvaで「チラシ」「学習塾」などで検索し、ベースとなるテンプレートを選択。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-indigo-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                <div>
                    <h4 class="font-bold">AIで作成した文章を入れる</h4>
                    <p class="text-sm text-gray-600">ChatGPTで作成したキャッチコピーや説明文をテンプレートに反映。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-indigo-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                <div>
                    <h4 class="font-bold">塾のカラーに調整</h4>
                    <p class="text-sm text-gray-600">塾のロゴカラーに合わせて色味を調整。統一感を出す。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-indigo-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">4</span>
                <div>
                    <h4 class="font-bold">画像を追加</h4>
                    <p class="text-sm text-gray-600">教室の写真や、Canvaの無料素材を活用して視覚的に訴求。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">広告は「誰に」「何を」伝えるかが重要。AIに複数パターンを作成させ、ターゲットに最も刺さりそうなものを選びましょう。A/Bテストで効果検証することも大切です。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="review-management.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：口コミ・評判管理
        </a>
        <a href="curriculum-design.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：カリキュラム設計
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
