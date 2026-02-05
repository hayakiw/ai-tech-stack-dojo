<?php
$page_title = '鑑定文・アドバイス作成 - AI×占い・スピリチュアル | AI Tech Stack';
$current_page = 'service';
$section_name = '第3部：鑑定・サービス';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">鑑定文・アドバイス作成</h1>

    <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
        <p class="text-lg">あなたの直感やカードの結果を、相談者に寄り添った言葉で伝える。AIを活用して、心に響く鑑定文を効率的に作成する方法を学びます。</p>
    </div>

    <div class="bg-yellow-50 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-yellow-700 mb-3">⚠️ 大切な注意点</h3>
        <p class="text-sm text-yellow-700">AIは「表現」を手伝うツールです。鑑定結果そのものはあなた自身の直感・能力で導き出し、AIは言語化・表現のサポートとして活用してください。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">タロット鑑定文の作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">基本の鑑定文プロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        タロット鑑定の結果を文章化してください。<br><br>
                        【相談者】30代女性<br>
                        【相談内容】「彼との関係は今後どうなりますか？」<br><br>
                        【引いたカード】<br>
                        ・過去：女帝（正位置）→ 豊かな関係性、愛情深い時期<br>
                        ・現在：吊るされた男（正位置）→ 停滞、視点を変える時<br>
                        ・未来：太陽（正位置）→ 明るい展開、幸せな結果<br><br>
                        【私の解釈】<br>
                        今は辛い時期だが、視点を変えれば明るい未来が待っている<br><br>
                        【条件】<br>
                        ・優しく寄り添うトーン<br>
                        ・希望を与える内容<br>
                        ・具体的なアドバイスを含める<br>
                        ・600文字程度
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">カードの意味を踏まえた表現</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        以下のタロットカードの意味を踏まえて、恋愛相談へのアドバイス文を作成してください。<br><br>
                        【カード】塔（正位置）<br><br>
                        【カードの意味】<br>
                        ・突然の変化、崩壊、気づき<br>
                        ・古いものを壊して新しく始める<br><br>
                        【条件】<br>
                        ・ネガティブなカードでも前向きに伝える<br>
                        ・「変化」を「チャンス」として捉える視点<br>
                        ・相談者を励ます内容<br>
                        ・300文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">星座・数秘術の鑑定</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-purple-600">星座鑑定プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    西洋占星術の鑑定結果を文章化してください。<br><br>
                    【相談者の情報】<br>
                    ・太陽星座：牡羊座<br>
                    ・月星座：蟹座<br>
                    ・アセンダント：天秤座<br><br>
                    【相談内容】「自分の強みと課題を知りたい」<br><br>
                    【私の解釈ポイント】<br>
                    ・行動力と繊細さの両面を持つ<br>
                    ・対人関係が課題になりやすい<br><br>
                    【条件】<br>
                    ・専門用語は分かりやすく説明<br>
                    ・強みを活かすアドバイス<br>
                    ・800文字程度
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">相談内容別テンプレート</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-purple-600 mb-3">恋愛相談</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・相手の気持ち</li>
                    <li>・今後の展開</li>
                    <li>・アプローチ方法</li>
                    <li>・復縁の可能性</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-purple-600 mb-3">仕事相談</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・転職のタイミング</li>
                    <li>・職場の人間関係</li>
                    <li>・適職・才能</li>
                    <li>・収入アップの方法</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">鑑定文作成のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">相談者の言葉を使う</h4>
                    <p class="text-sm text-gray-600">相談内容の言葉を取り入れて、寄り添っている感覚を伝える。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">具体的なアクションを提案</h4>
                    <p class="text-sm text-gray-600">「〇〇してみてください」と行動につながるアドバイスを。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">希望を持たせる締め方</h4>
                    <p class="text-sm text-gray-600">厳しい結果でも、最後は前向きなメッセージで締める。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">自分の言葉で仕上げる</h4>
                    <p class="text-sm text-gray-600">AIの出力をベースに、自分らしい表現に修正する。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIは「下書き」を作るツール。最終的にはあなたの言葉で、相談者の心に届く鑑定文に仕上げてください。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="branding.php" class="flex items-center text-gray-600 hover:text-purple-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：ブランディング・差別化
        </a>
        <a href="divination-content.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
            次へ：占術解説コンテンツ
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
