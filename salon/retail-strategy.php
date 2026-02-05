<?php
$page_title = '店販・物販戦略 - AI×美容院経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第4部：業務効率化・売上向上';
$step_number = 13;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">店販・物販戦略</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">店販は客単価アップの重要な施策。AIを活用して、お客様に合った商品提案と、売れるPOP・説明文を作成する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">店販の重要性</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">💰</div>
                <h3 class="font-bold">客単価アップ</h3>
                <p class="text-sm text-gray-600">施術＋店販で単価向上</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">🏠</div>
                <h3 class="font-bold">ホームケア提案</h3>
                <p class="text-sm text-gray-600">仕上がりを長持ちさせる</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">💚</div>
                <h3 class="font-bold">信頼関係構築</h3>
                <p class="text-sm text-gray-600">髪のプロとしての提案</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">お客様に合わせた商品提案</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">パーソナライズ提案のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下のお客様に最適なホームケア商品を提案してください。<br><br>
                    【お客様情報】<br>
                    ・髪質：細くて柔らかい、ボリュームが出にくい<br>
                    ・悩み：毛先のパサつき、広がり<br>
                    ・今日の施術：カット＋カラー<br>
                    ・予算感：中程度（3,000-5,000円程度なら購入検討）<br>
                    ・ライフスタイル：朝忙しい、時短希望<br><br>
                    【出力形式】<br>
                    ・おすすめ商品カテゴリ<br>
                    ・なぜこの商品がおすすめか<br>
                    ・使い方のポイント<br>
                    ・お客様へのおすすめトーク例
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">商品説明・POPの作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">商品説明文のプロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        以下のヘアケア商品の説明文を作成してください。<br><br>
                        【商品名】〇〇 ダメージケアオイル<br>
                        【特徴】<br>
                        ・アルガンオイル配合<br>
                        ・熱から髪を守る<br>
                        ・ベタつかない軽い仕上がり<br>
                        ・50ml ¥2,800<br><br>
                        【ターゲット】<br>
                        ・毛先のダメージが気になる方<br>
                        ・ドライヤーやアイロンをよく使う方<br><br>
                        【条件】<br>
                        ・100文字程度<br>
                        ・悩み→解決の流れで<br>
                        ・専門用語は避ける
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">POP用キャッチコピー</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        【プロンプト】<br>
                        美容院の店販POP用キャッチコピーを5つ作成してください。<br><br>
                        【商品】ダメージケアシャンプー<br>
                        【特徴】カラー後の髪を守る、色持ちアップ<br>
                        【ターゲット】カラーリングしている30-40代女性<br><br>
                        【条件】<br>
                        ・20文字以内<br>
                        ・目を引く表現<br>
                        ・悩みに刺さる言葉
                    </p>
                </div>
                <div class="bg-violet-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">出力例：</p>
                    <ul class="text-sm space-y-1">
                        <li>• 「カラー、2週間長持ち。」</li>
                        <li>• 「洗うたび、色が蘇る。」</li>
                        <li>• 「退色ストレスから解放。」</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">提案トークの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">押し売りにならない提案トーク</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    美容院で店販商品を自然におすすめするトークスクリプトを作成してください。<br><br>
                    【シーン】カラー施術後、仕上げの段階<br>
                    【提案したい商品】カラーケアシャンプー<br>
                    【お客様の状況】今日カラーをした、色持ちを気にしている<br><br>
                    【条件】<br>
                    ・押し売りに感じない自然な流れ<br>
                    ・お客様が断りやすい余地を残す<br>
                    ・「なぜこの商品がこの人に合うか」を説明<br>
                    ・買わなくてもホームケアのアドバイスになる
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">店販成功のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">施術中に自然に紹介</h4>
                    <p class="text-sm text-gray-600">「今使っているこのオイル、〇〇さんの髪質にすごく合うんです」と実際に使いながら。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">悩みの解決策として提案</h4>
                    <p class="text-sm text-gray-600">商品を売るのではなく、悩みを解決する方法として紹介。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">使い方まで丁寧に説明</h4>
                    <p class="text-sm text-gray-600">「朝、これをワンプッシュ毛先につけるだけで」と具体的に。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">サンプルやお試しサイズを活用</h4>
                    <p class="text-sm text-gray-600">迷っている方にはサンプルを渡して、次回感想を聞く。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">店販は「売り込み」ではなく「プロとしてのアドバイス」。AIで商品知識と提案トークを磨き、お客様の髪の悩みを解決するパートナーになりましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="staff-training.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：スタッフ教育
        </a>
        <a href="glossary.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：用語集
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
