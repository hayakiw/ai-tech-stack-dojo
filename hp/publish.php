<?php
$page_title = '公開と運用 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：公開とサポート';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">公開と運用</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">作ったサイトをインターネットに公開しましょう。無料〜低コストで公開できるサービスを紹介します。</p>
        </div>

        <!-- セクション1: 公開に必要なもの -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">公開に必要なもの</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-bold text-lg mb-3 text-orange-600">🌐 ドメイン</h3>
                        <p class="text-sm text-gray-600 mb-2">サイトの住所（URL）</p>
                        <p class="text-sm">例：example.com</p>
                        <p class="text-xs text-gray-500 mt-2">年間1,000〜3,000円程度</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-3 text-orange-600">🖥️ サーバー</h3>
                        <p class="text-sm text-gray-600 mb-2">サイトのデータを置く場所</p>
                        <p class="text-sm">静的サイトなら無料も可能</p>
                        <p class="text-xs text-gray-500 mt-2">無料〜月額1,000円程度</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2: 無料で公開できるサービス -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">無料で公開できるサービス</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🔥</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Netlify <span class="text-sm font-normal text-orange-600">（初心者におすすめ）</span></h3>
                            <p class="text-gray-600 mb-2">静的サイトに特化。ドラッグ&ドロップで公開可能。フォーム機能も無料で使える。</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料枠あり</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">フォーム機能</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">ドラッグ&ドロップ</span>
                                <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs">GitHub不要</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📄</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">GitHub Pages</h3>
                            <p class="text-gray-600 mb-2">GitHubリポジトリから直接公開。完全無料。</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">完全無料</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">GitHub連携</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">▲</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Vercel</h3>
                            <p class="text-gray-600 mb-2">静的サイト、Next.jsに最適。GitHubと連携で自動デプロイ。</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料枠あり</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">SSL自動</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">高速</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3: 方法1 Netlifyで公開 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">方法1: Netlifyで公開（最も簡単）</h2>

            <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-6">
                <p><strong>なぜNetlifyが初心者向けか：</strong>ドラッグ&ドロップだけで公開できるため、GitHubアカウントやコマンド操作が一切不要です。まずはここから試してみましょう。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="space-y-6">
                    <!-- ステップ1 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">1</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">Netlifyにアクセスしてアカウント作成</h4>
                            <p class="text-sm text-gray-600 mb-2"><a href="https://www.netlify.com" target="_blank" class="text-orange-600 underline">netlify.com</a> にアクセスし、「Sign up」をクリックします。</p>
                            <div class="bg-gray-50 p-3 rounded text-sm">
                                <p class="mb-1"><strong>登録方法は3つ：</strong></p>
                                <ul class="list-disc list-inside text-gray-600 space-y-1">
                                    <li>メールアドレスで登録（最もシンプル）</li>
                                    <li>GitHubアカウントで登録</li>
                                    <li>Googleアカウントで登録</li>
                                </ul>
                                <p class="mt-2 text-gray-500">メールアドレスで登録すれば、GitHubアカウントは必要ありません。</p>
                            </div>
                        </div>
                    </div>

                    <!-- ステップ2 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">2</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">「Deploy manually」を選択</h4>
                            <p class="text-sm text-gray-600 mb-2">ログイン後、以下の順にクリックします。</p>
                            <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                                <pre class="whitespace-pre-wrap">「Sites」タブ → 「Add new site」 → 「Deploy manually」</pre>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">「Deploy manually」を選ぶと、ファイルのアップロード画面が表示されます。</p>
                        </div>
                    </div>

                    <!-- ステップ3 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">3</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">プロジェクトフォルダをドラッグ&ドロップ</h4>
                            <p class="text-sm text-gray-600 mb-2">「Drag and drop your site output folder here」という点線のエリアが表示されます。</p>
                            <div class="bg-gray-50 p-4 rounded border-2 border-dashed border-gray-300 text-center text-sm text-gray-500 mb-2">
                                あなたのプロジェクトフォルダを<br>ここにドラッグ&ドロップするイメージ
                            </div>
                            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-3 text-sm">
                                <p><strong>重要：</strong>フォルダの中に <code class="bg-gray-100 px-1 rounded">index.html</code> が含まれていることを確認してください。index.htmlがサイトのトップページになります。</p>
                            </div>
                        </div>
                    </div>

                    <!-- ステップ4 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">4</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">公開完了！URLを確認</h4>
                            <p class="text-sm text-gray-600 mb-2">数秒でデプロイが完了し、自動的にURLが発行されます。</p>
                            <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-2">
                                <pre class="whitespace-pre-wrap">例：https://random-name-12345.netlify.app</pre>
                            </div>
                            <p class="text-sm text-gray-500">ランダムな名前が自動で付きますが、後から変更できます。</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 確認ボックス -->
            <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6">
                <p class="font-bold text-green-700 mb-2">確認しよう</p>
                <p class="text-sm text-gray-700">表示されたURLをクリックして、自分のサイトがインターネット上に表示されることを確認しましょう。スマホのブラウザからもアクセスしてみてください。</p>
            </div>

            <!-- サイト名変更 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3 text-orange-600">サイト名（URL）を変更する</h3>
                <p class="text-sm text-gray-600 mb-3">ランダムなURLを分かりやすい名前に変更できます。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-3">
                    <pre class="whitespace-pre-wrap">「Site configuration」→「Change site name」

例：my-portfolio → https://my-portfolio.netlify.app</pre>
                </div>
                <p class="text-xs text-gray-500">他の人が使っていない名前であれば、好きな名前に設定できます。</p>
            </div>
        </section>

        <!-- セクション4: 方法2 GitHub Pagesで公開 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">方法2: GitHub Pagesで公開</h2>

            <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-6">
                <p><strong>GitHub Pagesの特徴：</strong>GitHubにコードをアップロードすれば、そのまま無料でWebサイトとして公開できます。コードのバージョン管理もできるので、長期的な運用に向いています。</p>
            </div>

            <!-- GitHubアカウント作成 -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">事前準備：GitHubアカウントの作成</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">1</div>
                        <div>
                            <h4 class="font-bold">GitHubにアクセス</h4>
                            <p class="text-sm text-gray-600"><a href="https://github.com" target="_blank" class="text-orange-600 underline">github.com</a> にアクセスし、「Sign up」をクリック</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">2</div>
                        <div>
                            <h4 class="font-bold">アカウント情報を入力</h4>
                            <p class="text-sm text-gray-600">メールアドレス、パスワード、ユーザー名を入力（ユーザー名はURLの一部になります）</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">3</div>
                        <div>
                            <h4 class="font-bold">メール認証</h4>
                            <p class="text-sm text-gray-600">届いたメールのリンクをクリックして認証完了</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Claude Codeで操作 -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">Claude CodeでGitHubにアップロード</h3>
                <p class="text-sm text-gray-600 mb-4">Claude Codeを使えば、難しいGitコマンドを覚えなくても簡単にアップロードできます。</p>

                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm mb-4">
                    <p class="text-orange-400 mb-2 font-bold">Claude Codeへの指示：</p>
                    <pre class="whitespace-pre-wrap">このプロジェクトをGitHubにアップロードして、
GitHub Pagesで公開してください</pre>
                </div>

                <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-4">
                    <p class="font-bold text-sm mb-2">Claude Codeが自動で行うこと：</p>
                    <ol class="text-sm text-gray-600 space-y-1 list-decimal list-inside">
                        <li>Gitリポジトリを初期化（git init）</li>
                        <li>ファイルを追加（git add）</li>
                        <li>コミットを作成（git commit）</li>
                        <li>GitHubにリポジトリを作成</li>
                        <li>コードをアップロード（git push）</li>
                    </ol>
                </div>

                <p class="text-xs text-gray-500">初回のみGitHubの認証画面が表示されることがあります。画面の指示に従って許可してください。</p>
            </div>

            <!-- GitHub Pages設定 -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">GitHub Pagesを有効にする</h3>
                <p class="text-sm text-gray-600 mb-4">GitHubにアップロードしたら、GitHub Pagesの設定を行います。</p>

                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">1</div>
                        <div>
                            <h4 class="font-bold">リポジトリのSettingsを開く</h4>
                            <p class="text-sm text-gray-600">GitHubのリポジトリページで上部の「Settings」タブをクリック</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">2</div>
                        <div>
                            <h4 class="font-bold">Pagesを選択</h4>
                            <p class="text-sm text-gray-600">左メニューの「Pages」をクリック</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">3</div>
                        <div>
                            <h4 class="font-bold">ブランチを設定</h4>
                            <p class="text-sm text-gray-600">「Source」で「Deploy from a branch」を選択し、「Branch」を <code class="bg-gray-100 px-1 rounded text-orange-600">main</code> に設定して「Save」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">4</div>
                        <div>
                            <h4 class="font-bold">数分待って公開完了</h4>
                            <p class="text-sm text-gray-600">1〜3分ほどで公開されます。URLは以下の形式になります。</p>
                            <div class="bg-gray-800 text-gray-100 p-3 rounded text-sm mt-2">
                                <pre class="whitespace-pre-wrap">https://ユーザー名.github.io/リポジトリ名/</pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 確認ボックス -->
            <div class="bg-green-50 border-l-4 border-green-500 p-4">
                <p class="font-bold text-green-700 mb-2">確認しよう</p>
                <p class="text-sm text-gray-700">設定後、Pagesの画面に表示されるURLにアクセスして、サイトが正しく表示されるか確認しましょう。表示まで数分かかることがあります。</p>
            </div>
        </section>

        <!-- セクション5: 方法3 Vercelで公開 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">方法3: Vercelで公開</h2>

            <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-6">
                <p><strong>Vercelの特徴：</strong>GitHubと連携して、コードをpushするだけで自動的にサイトが更新されます。一度設定すれば運用がとても楽になります。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <p class="text-sm text-gray-600 mb-4">事前にGitHubにコードがアップロードされている必要があります（方法2の前半を参照）。</p>

                <div class="space-y-6">
                    <!-- ステップ1 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">1</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">Vercelにアカウント作成</h4>
                            <p class="text-sm text-gray-600 mb-2"><a href="https://vercel.com" target="_blank" class="text-orange-600 underline">vercel.com</a> にアクセスし、「Sign Up」をクリック。</p>
                            <div class="bg-gray-50 p-3 rounded text-sm">
                                <p class="text-gray-600"><strong>おすすめ：</strong>「Continue with GitHub」でGitHubアカウントを使ってログインすると、リポジトリの連携がスムーズです。</p>
                            </div>
                        </div>
                    </div>

                    <!-- ステップ2 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">2</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">新しいプロジェクトを作成</h4>
                            <p class="text-sm text-gray-600 mb-2">ダッシュボードで以下の順にクリックします。</p>
                            <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                                <pre class="whitespace-pre-wrap">「Add New...」→「Project」→「Import Git Repository」</pre>
                            </div>
                        </div>
                    </div>

                    <!-- ステップ3 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">3</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">GitHubリポジトリを選択</h4>
                            <p class="text-sm text-gray-600 mb-2">GitHubに連携すると、リポジトリの一覧が表示されます。公開したいリポジトリの「Import」をクリック。</p>
                            <p class="text-xs text-gray-500">初回はGitHubとの連携を許可する画面が表示されます。</p>
                        </div>
                    </div>

                    <!-- ステップ4 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">4</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">「Deploy」をクリック</h4>
                            <p class="text-sm text-gray-600 mb-2">設定はそのままで「Deploy」ボタンをクリック。30秒程度で自動ビルド&公開が完了します。</p>
                            <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                                <pre class="whitespace-pre-wrap">例：https://プロジェクト名.vercel.app</pre>
                            </div>
                        </div>
                    </div>

                    <!-- ステップ5 -->
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm shrink-0">5</div>
                        <div class="w-full">
                            <h4 class="font-bold mb-2">今後の更新は自動</h4>
                            <p class="text-sm text-gray-600">一度設定すれば、GitHubにコードをpushするたびに自動でサイトが更新されます。手動でのデプロイ作業は不要です。</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 確認ボックス -->
            <div class="bg-green-50 border-l-4 border-green-500 p-4">
                <p class="font-bold text-green-700 mb-2">確認しよう</p>
                <p class="text-sm text-gray-700">デプロイ完了後、Vercelのダッシュボードに表示されるURLをクリックして、サイトが正しく表示されることを確認しましょう。</p>
            </div>
        </section>

        <!-- セクション6: 独自ドメインの設定 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">独自ドメインの設定（必要な場合のみ）</h2>

            <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mb-6">
                <p>最初はサブドメイン（xxx.netlify.app や xxx.github.io）で十分です。独自ドメインはサイトを本格運用する段階で検討しましょう。</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">ドメインの取得</h3>
                <p class="text-sm text-gray-600 mb-4">独自ドメインを使いたい場合は、まずドメイン取得サービスで購入します。</p>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-gray-50 p-4 rounded text-center">
                        <h4 class="font-bold text-sm mb-1">お名前.com</h4>
                        <p class="text-xs text-gray-500">国内最大手、種類が豊富</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded text-center">
                        <h4 class="font-bold text-sm mb-1">ムームードメイン</h4>
                        <p class="text-xs text-gray-500">操作がシンプルで初心者向け</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded text-center">
                        <h4 class="font-bold text-sm mb-1">Google Domains</h4>
                        <p class="text-xs text-gray-500">管理画面が見やすい</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-orange-600">各サービスでのドメイン設定</h3>
                <p class="text-sm text-gray-600 mb-4">ドメインを取得したら、公開サービス側で設定を行います。</p>
                <div class="space-y-3">
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="font-bold text-sm">Netlify：</p>
                        <p class="text-sm text-gray-600">「Domain management」→「Add custom domain」でドメインを追加。DNS設定の案内が表示されます。</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="font-bold text-sm">GitHub Pages：</p>
                        <p class="text-sm text-gray-600">「Settings」→「Pages」→「Custom domain」にドメインを入力。DNSにCNAMEレコードを追加します。</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="font-bold text-sm">Vercel：</p>
                        <p class="text-sm text-gray-600">「Settings」→「Domains」でドメインを追加。自動でSSL証明書も設定されます。</p>
                    </div>
                </div>
                <p class="text-xs text-gray-500 mt-3">いずれのサービスも無料でSSL（https）に対応しています。</p>
            </div>
        </section>

        <!-- セクション7: 公開後にやること -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">公開後にやること</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">📊 アクセス解析</h4>
                    <p class="text-sm text-gray-600">Google Analyticsを設置して訪問者を分析</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">🔍 Search Console</h4>
                    <p class="text-sm text-gray-600">Google検索でのパフォーマンスを確認</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">📱 各デバイスで確認</h4>
                    <p class="text-sm text-gray-600">PC、スマホ、タブレットで表示チェック</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">🔄 定期的な更新</h4>
                    <p class="text-sm text-gray-600">コンテンツを更新して鮮度を保つ</p>
                </div>
            </div>
        </section>

        <!-- セクション8: よくあるエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">よくあるエラーと対処法</h2>

            <div class="space-y-4">
                <div class="bg-red-50 border-l-4 border-red-500 p-4">
                    <p class="font-bold text-red-700 mb-2">ページが404（Not Found）になる</p>
                    <div class="text-sm text-gray-700 space-y-2">
                        <p><strong>原因：</strong><code class="bg-gray-100 px-1 rounded">index.html</code> がプロジェクトのルート（一番上の階層）にない</p>
                        <p><strong>対処法：</strong></p>
                        <ul class="list-disc list-inside ml-4 space-y-1">
                            <li>フォルダ構造を確認し、index.htmlが最上位にあるか確認</li>
                            <li>サブフォルダにindex.htmlがある場合は、フォルダごとではなく中身をアップロード</li>
                            <li>GitHub Pagesの場合、ブランチ設定が正しいか確認</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-red-50 border-l-4 border-red-500 p-4">
                    <p class="font-bold text-red-700 mb-2">CSSが効いていない（デザインが崩れる）</p>
                    <div class="text-sm text-gray-700 space-y-2">
                        <p><strong>原因：</strong>CSSファイルへのパスが間違っている</p>
                        <p><strong>対処法：</strong></p>
                        <ul class="list-disc list-inside ml-4 space-y-1">
                            <li>HTMLの <code class="bg-gray-100 px-1 rounded">&lt;link&gt;</code> タグのパスを確認</li>
                            <li>相対パス（<code class="bg-gray-100 px-1 rounded">./css/style.css</code>）を使っているか確認</li>
                            <li>ファイル名の大文字・小文字が一致しているか確認（サーバーでは区別されます）</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-red-50 border-l-4 border-red-500 p-4">
                    <p class="font-bold text-red-700 mb-2">更新が反映されない</p>
                    <div class="text-sm text-gray-700 space-y-2">
                        <p><strong>原因：</strong>ブラウザのキャッシュが古いページを表示している</p>
                        <p><strong>対処法：</strong></p>
                        <ul class="list-disc list-inside ml-4 space-y-1">
                            <li>ブラウザのキャッシュをクリア（Ctrl + Shift + R / Cmd + Shift + R）</li>
                            <li>公開サービスのダッシュボードでデプロイが完了しているか確認</li>
                            <li>Netlifyの場合：「Deploys」タブで最新デプロイのステータスを確認</li>
                            <li>GitHub Pagesの場合：反映まで数分かかることがあるので少し待つ</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-red-50 border-l-4 border-red-500 p-4">
                    <p class="font-bold text-red-700 mb-2">画像が表示されない</p>
                    <div class="text-sm text-gray-700 space-y-2">
                        <p><strong>原因：</strong>画像ファイルのパスが間違っている、またはファイルがアップロードされていない</p>
                        <p><strong>対処法：</strong></p>
                        <ul class="list-disc list-inside ml-4 space-y-1">
                            <li><code class="bg-gray-100 px-1 rounded">&lt;img src="..."&gt;</code> のパスが正しいか確認</li>
                            <li>画像ファイルがプロジェクトフォルダに含まれているか確認</li>
                            <li>ファイル名に日本語やスペースが含まれていないか確認</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>初心者はNetlifyのドラッグ&ドロップが最も簡単</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>GitHub Pagesは完全無料で、Claude Codeで簡単に設定可能</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Vercelは自動デプロイで長期運用に最適</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>独自ドメインは必要になってからでOK</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>公開後はアクセス解析を設置して改善を続ける</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-blog.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ブログサイト制作
            </a>
            <a href="next-steps.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
