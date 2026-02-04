<?php
$page_title = 'よくあるエラー集 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'support';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第4部：サポート';
$step_number = 17;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">よくあるエラー集</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">開発中によく遭遇するエラーと、その解決方法をまとめました。エラーが出たらまずここを確認してください。</p>
        </div>

        <!-- 環境構築のエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">環境構築のエラー</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">'node' は認識されていません / command not found: node</h3>
                    <p class="text-sm text-gray-600 mb-3">Node.jsがインストールされていない、またはPATHが通っていない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>Node.jsを<a href="https://nodejs.org/" class="text-blue-600 hover:underline">公式サイト</a>から再インストール</li>
                            <li>インストール後、PCを再起動</li>
                            <li><code class="bg-gray-200 px-1 rounded">node --version</code>で確認</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">'python' は認識されていません / command not found: python</h3>
                    <p class="text-sm text-gray-600 mb-3">Pythonがインストールされていない、またはPATHが通っていない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>Pythonを再インストール時に「Add Python to PATH」にチェック</li>
                            <li>Macの場合は<code class="bg-gray-200 px-1 rounded">python3</code>を試す</li>
                            <li>PCを再起動</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">npm ERR! code ENOENT</h3>
                    <p class="text-sm text-gray-600 mb-3">package.jsonが見つからない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>正しいディレクトリにいるか確認（frontendフォルダ内か）</li>
                            <li><code class="bg-gray-200 px-1 rounded">ls</code>や<code class="bg-gray-200 px-1 rounded">dir</code>でpackage.jsonがあるか確認</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Next.jsのエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Next.js開発中のエラー</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">Module not found: Can't resolve '...'</h3>
                    <p class="text-sm text-gray-600 mb-3">インポートしようとしているモジュールが見つからない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>ファイルパスが正しいか確認（@/は src/の意味）</li>
                            <li>外部パッケージなら<code class="bg-gray-200 px-1 rounded">npm install パッケージ名</code></li>
                            <li>ファイル名の大文字小文字を確認</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">useState/useEffect is not defined</h3>
                    <p class="text-sm text-gray-600 mb-3">React Hooksがインポートされていない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <div class="code-block p-2 rounded font-mono text-sm mt-2">
                            import { useState, useEffect } from "react";
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">React Hooks must be called inside a function component</h3>
                    <p class="text-sm text-gray-600 mb-3">Hooksがコンポーネント外で呼ばれている</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>useStateなどはコンポーネント関数の直下で呼ぶ</li>
                            <li>条件分岐やループの中で呼ばない</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">Hydration failed / Text content does not match</h3>
                    <p class="text-sm text-gray-600 mb-3">サーバーとクライアントでレンダリング結果が異なる</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>Date.now()などランダムな値を直接レンダリングしていないか確認</li>
                            <li>useEffectで初期化するか、suppressHydrationWarningを使用</li>
                            <li>ファイル先頭に<code class="bg-gray-200 px-1 rounded">"use client"</code>を追加</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">TypeError: Cannot read property 'map' of undefined</h3>
                    <p class="text-sm text-gray-600 mb-3">undefinedに対してmapを呼んでいる</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>データがまだ取得できていない状態で表示しようとしている</li>
                            <li>初期値を空配列<code class="bg-gray-200 px-1 rounded">useState([])</code>にする</li>
                            <li>オプショナルチェイニング<code class="bg-gray-200 px-1 rounded">data?.map()</code>を使う</li>
                            <li>ローディング状態を追加する</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- FastAPIのエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">FastAPI開発中のエラー</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">ModuleNotFoundError: No module named 'fastapi'</h3>
                    <p class="text-sm text-gray-600 mb-3">FastAPIがインストールされていない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>仮想環境が有効になっているか確認</li>
                            <li><code class="bg-gray-200 px-1 rounded">pip install fastapi uvicorn</code>を実行</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">422 Unprocessable Entity</h3>
                    <p class="text-sm text-gray-600 mb-3">リクエストのバリデーションエラー</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>送信しているJSONの形式がPydanticモデルと一致しているか確認</li>
                            <li>必須フィールドが含まれているか確認</li>
                            <li>Content-Type: application/jsonヘッダーを確認</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">IndentationError: unexpected indent</h3>
                    <p class="text-sm text-gray-600 mb-3">Pythonのインデントが不正</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>タブとスペースが混在していないか確認</li>
                            <li>スペース4つで統一する</li>
                            <li>エディタの設定で「Insert Spaces」をオンに</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 連携時のエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">フロント・バック連携時のエラー</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">CORS policy: No 'Access-Control-Allow-Origin'</h3>
                    <p class="text-sm text-gray-600 mb-3">CORSエラー。異なるオリジン間の通信がブロックされている</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <p class="text-sm mb-2">FastAPIにCORS設定を追加：</p>
                        <div class="code-block p-2 rounded font-mono text-sm overflow-x-auto">
<pre>from fastapi.middleware.cors import CORSMiddleware

app.add_middleware(
    CORSMiddleware,
    allow_origins=["http://localhost:3000"],
    allow_methods=["*"],
    allow_headers=["*"],
)</pre>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">Failed to fetch / NetworkError</h3>
                    <p class="text-sm text-gray-600 mb-3">ネットワークエラー。サーバーに接続できない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>バックエンドサーバーが起動しているか確認</li>
                            <li>APIのURLが正しいか確認（http://localhost:8000）</li>
                            <li>ポート番号が合っているか確認</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">404 Not Found</h3>
                    <p class="text-sm text-gray-600 mb-3">指定したエンドポイントが存在しない</p>
                    <div class="bg-green-50 p-4 rounded">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>URLのパスが正しいか確認</li>
                            <li>/docs でエンドポイント一覧を確認</li>
                            <li>末尾のスラッシュの有無を確認</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- AIに聞く -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">解決しない場合は</h2>

            <div class="bg-blue-50 p-6 rounded-lg">
                <h3 class="font-bold mb-3">AIに質問する</h3>
                <p class="mb-4">エラーメッセージをそのままコピーして、Claude CodeやCursorに質問しましょう。</p>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre>以下のエラーを修正してください：

[エラーメッセージをここに貼り付け]

発生状況：
- [いつ発生するか]
- [何をしたら発生したか]</pre>
                </div>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="tutorial-todo-integration.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：Todoアプリ連携編
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
