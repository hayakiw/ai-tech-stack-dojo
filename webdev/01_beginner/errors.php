<?php
$page_title = 'よくあるエラー集 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'support';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
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

        <!-- デバッグの基本 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まず知っておくべきこと：デバッグツール</h2>

            <p class="text-sm text-gray-600 mb-4">エラーが出たとき、闇雲に直そうとするのではなく、まず<strong>エラーの内容を正確に読む</strong>ことが大切です。そのために使うのがブラウザの「開発者ツール（DevTools）」です。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">ブラウザのDevToolsを開く</h3>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="font-bold text-sm mb-1">Windows / Linux</p>
                        <code class="text-sm bg-gray-200 px-2 py-0.5 rounded">F12</code> または <code class="text-sm bg-gray-200 px-2 py-0.5 rounded">Ctrl + Shift + I</code>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <p class="font-bold text-sm mb-1">Mac</p>
                        <code class="text-sm bg-gray-200 px-2 py-0.5 rounded">Cmd + Option + I</code>
                    </div>
                </div>
                <div class="space-y-3 text-sm">
                    <div class="flex items-start gap-3">
                        <span class="bg-red-100 text-red-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">Console</span>
                        <p class="text-gray-600">JavaScriptのエラーメッセージが表示される。赤いテキストのエラーを探す。</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2 py-0.5 rounded mt-0.5">Network</span>
                        <p class="text-gray-600">API通信の状況を確認。リクエストのステータスコード（200, 404, 422, 500など）や送受信データを見る。</p>
                    </div>
                </div>
            </div>

            <div class="bg-purple-50 border-l-4 border-purple-500 p-4">
                <p class="text-sm"><strong>エラー解決の3ステップ：</strong> (1) エラーメッセージを読む → (2) エラーの原因を特定する → (3) 修正する。エラーメッセージを読み飛ばさず、1行目に「何が問題か」のヒントがあります。</p>
            </div>
        </section>

        <!-- 環境構築のエラー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">環境構築のエラー</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">'node' は認識されていません / command not found: node</h3>
                    <p class="text-sm text-gray-600 mb-3">Node.jsがインストールされていない、またはPATHが通っていない</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>Node.jsを<a href="https://nodejs.org/" class="text-blue-600 hover:underline">公式サイト</a>から再インストール</li>
                            <li>インストール後、<strong>ターミナルを閉じて再度開く</strong>（またはPCを再起動）</li>
                            <li><code class="bg-gray-200 px-1 rounded">node --version</code>で確認</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> インストーラがPATH（コマンドの検索場所）を設定するが、すでに開いていたターミナルには反映されない。ターミナルを開き直すことで新しいPATHが読み込まれる。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">'python' は認識されていません / command not found: python</h3>
                    <p class="text-sm text-gray-600 mb-3">Pythonがインストールされていない、またはPATHが通っていない</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>Pythonを再インストール時に<strong>「Add Python to PATH」にチェック</strong>（最重要）</li>
                            <li>Macの場合は<code class="bg-gray-200 px-1 rounded">python3</code>を試す（Macではpython3がデフォルト名）</li>
                            <li>ターミナルを閉じて再度開く、またはPCを再起動</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> WindowsではPythonインストール時にPATH追加のチェックがデフォルトでオフ。チェックを忘れるとコマンドラインからPythonが見つからない。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">npm ERR! code ENOENT</h3>
                    <p class="text-sm text-gray-600 mb-3">package.jsonが見つからない</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>正しいディレクトリにいるか確認（frontendフォルダ内か）</li>
                            <li><code class="bg-gray-200 px-1 rounded">ls</code>（Mac）や<code class="bg-gray-200 px-1 rounded">dir</code>（Windows）でpackage.jsonがあるか確認</li>
                            <li><code class="bg-gray-200 px-1 rounded">cd frontend</code>で移動してから再実行</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> npmはカレントディレクトリのpackage.jsonを探す。プロジェクトのルートではなく、フロントエンドのフォルダ内で実行する必要がある。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">pip install でエラーが出る</h3>
                    <p class="text-sm text-gray-600 mb-3">Permission denied、または仮想環境関連のエラー</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>仮想環境を有効化してからインストール：<code class="bg-gray-200 px-1 rounded">venv\Scripts\activate</code>（Windows）/ <code class="bg-gray-200 px-1 rounded">source venv/bin/activate</code>（Mac）</li>
                            <li>ターミナルの先頭に<code class="bg-gray-200 px-1 rounded">(venv)</code>が表示されていれば有効化済み</li>
                            <li>有効化していない状態でインストールするとシステム全体に影響するのでNG</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> 仮想環境（venv）を使うと、プロジェクトごとにパッケージを分離できる。有効化せずにpip installすると、権限不足やバージョン競合の原因になる。</p>
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
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>ファイルパスが正しいか確認（<code class="bg-gray-200 px-1 rounded">@/</code>は src/の意味）</li>
                            <li>外部パッケージなら<code class="bg-gray-200 px-1 rounded">npm install パッケージ名</code></li>
                            <li>ファイル名の<strong>大文字小文字</strong>を確認（Linuxでは区別される）</li>
                            <li>ファイルの拡張子（.ts / .tsx）を確認</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> import文のパスとファイルの実際の場所が一致していない。新しいファイルを作った後にこのエラーが出たら、パスのスペルミスが多い。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">useState/useEffect is not defined</h3>
                    <p class="text-sm text-gray-600 mb-3">React Hooksがインポートされていない</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <p class="text-sm">ファイルの先頭に以下を追加：</p>
                        <div class="code-block p-2 rounded font-mono text-sm mt-2">
                            import { useState, useEffect } from "react";
                        </div>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> React 17以前は自動インポートされていたが、TypeScript + Next.jsの環境ではHooksを明示的にインポートする必要がある。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">You're importing a component that needs useState / useEffect...</h3>
                    <p class="text-sm text-gray-600 mb-3">Client Componentの指定がない</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <p class="text-sm">ファイルの<strong>1行目</strong>に以下を追加：</p>
                        <div class="code-block p-2 rounded font-mono text-sm mt-2">
                            "use client";
                        </div>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> Next.js App Routerでは、デフォルトがServer Component。useState/useEffect/onClickなどのブラウザ機能を使うコンポーネントは"use client"でClient Componentにする必要がある。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">Hydration failed / Text content does not match</h3>
                    <p class="text-sm text-gray-600 mb-3">サーバーとクライアントでレンダリング結果が異なる</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>Date.now()などランダムな値を直接レンダリングしていないか確認</li>
                            <li>useEffectで初期化するか、suppressHydrationWarningを使用</li>
                            <li>ファイル先頭に<code class="bg-gray-200 px-1 rounded">"use client"</code>を追加</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> Next.jsはまずサーバーでHTMLを生成し、ブラウザで同じ内容を再生成して「突き合わせ」する。Date.now()のように毎回変わる値はサーバーとブラウザで一致しないためエラーになる。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">TypeError: Cannot read property 'map' of undefined</h3>
                    <p class="text-sm text-gray-600 mb-3">undefinedに対してmapを呼んでいる</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>初期値を空配列<code class="bg-gray-200 px-1 rounded">useState&lt;Todo[]&gt;([])</code>にする</li>
                            <li>オプショナルチェイニング<code class="bg-gray-200 px-1 rounded">data?.map()</code>を使う</li>
                            <li>ローディング状態を追加して、データ取得前はリストを表示しない</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> API通信は非同期なので、データが届く前にコンポーネントが表示されようとする。その時点ではデータがundefinedなのでmapが呼べない。</p>
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
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>仮想環境が有効になっているか確認（ターミナルに<code class="bg-gray-200 px-1 rounded">(venv)</code>が表示されているか）</li>
                            <li><code class="bg-gray-200 px-1 rounded">pip install fastapi uvicorn</code>を実行</li>
                            <li>それでもダメなら仮想環境を作り直す：<code class="bg-gray-200 px-1 rounded">python -m venv venv</code></li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> 仮想環境が有効化されていない状態でuvicornを実行すると、システムのPython環境を参照する。そこにFastAPIがインストールされていないためエラーになる。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">422 Unprocessable Entity</h3>
                    <p class="text-sm text-gray-600 mb-3">リクエストのバリデーションエラー</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>送信しているJSONの形式がPydanticモデルと一致しているか確認</li>
                            <li>必須フィールドが含まれているか確認</li>
                            <li>Content-Type: application/jsonヘッダーを確認</li>
                            <li><code class="bg-gray-200 px-1 rounded">/docs</code>で直接テストして正しいリクエスト形式を確認</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> FastAPIはPydanticを使ってリクエストデータを自動バリデーションする。送られたデータが定義した型・形式と一致しないと422エラーを返す。<code class="bg-gray-200 px-1 rounded">/docs</code>画面で「Try it out」するとレスポンスにどのフィールドが不正か詳細が書かれている。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">IndentationError: unexpected indent</h3>
                    <p class="text-sm text-gray-600 mb-3">Pythonのインデントが不正</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>タブとスペースが混在していないか確認</li>
                            <li>スペース4つで統一する</li>
                            <li>エディタ（VS Code等）の設定で「Insert Spaces」をオン、タブサイズを4に</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> Pythonは他の言語と違い、インデント（字下げ）でブロックの範囲を決める。タブとスペースが混在すると見た目は同じでもPythonには別物として見えるためエラーになる。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">ERROR: [Errno 48] Address already in use</h3>
                    <p class="text-sm text-gray-600 mb-3">ポートが他のプロセスに使われている</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>前回起動したサーバーが残っていないか確認（ターミナルを閉じ忘れていないか）</li>
                            <li>別のポートで起動：<code class="bg-gray-200 px-1 rounded">uvicorn main:app --reload --port 8001</code></li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> 同じポート番号で2つのサーバーは起動できない。前回のサーバーがまだ動いているか、別のアプリが同じポートを使っている。</p>
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
                    <div class="bg-green-50 p-4 rounded mb-3">
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
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> ブラウザのセキュリティ機能で、異なるオリジン（ドメイン+ポート番号の組み合わせ）間の通信はデフォルトでブロックされる。localhost:3000とlocalhost:8000はポートが異なるので「別のオリジン」扱い。バックエンド側で明示的に許可する必要がある。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">Failed to fetch / NetworkError</h3>
                    <p class="text-sm text-gray-600 mb-3">ネットワークエラー。サーバーに接続できない</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法（上から順に確認）</p>
                        <ol class="list-decimal list-inside text-sm space-y-1">
                            <li>バックエンドサーバーが起動しているか確認</li>
                            <li><a href="http://localhost:8000/docs" class="text-blue-600 hover:underline">http://localhost:8000/docs</a> にブラウザでアクセスして確認</li>
                            <li>APIのURLが正しいか確認（<code class="bg-gray-200 px-1 rounded">http://localhost:8000</code>）</li>
                            <li>ポート番号が合っているか確認</li>
                        </ol>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> フロントエンドがバックエンドにHTTPリクエストを送ろうとしたが、接続先が存在しない。バックエンドが起動していない、URLが間違っている、またはファイアウォールでブロックされている可能性がある。</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-red-600">404 Not Found</h3>
                    <p class="text-sm text-gray-600 mb-3">指定したエンドポイントが存在しない</p>
                    <div class="bg-green-50 p-4 rounded mb-3">
                        <p class="font-bold text-green-700 mb-2">解決法</p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            <li>URLのパスが正しいか確認（<code class="bg-gray-200 px-1 rounded">/todos</code> vs <code class="bg-gray-200 px-1 rounded">/todo</code> など）</li>
                            <li><code class="bg-gray-200 px-1 rounded">/docs</code> でエンドポイント一覧を確認</li>
                            <li>末尾のスラッシュの有無を確認（<code class="bg-gray-200 px-1 rounded">/todos</code> vs <code class="bg-gray-200 px-1 rounded">/todos/</code>）</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-3 rounded text-sm">
                        <p><strong>なぜ起きる？</strong> リクエストしたURLに対応するエンドポイントがバックエンドに定義されていない。タイプミスが多い。FastAPIの/docsページで定義されているエンドポイントと見比べると発見しやすい。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- AIに聞く -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">解決しない場合は</h2>

            <div class="bg-blue-50 p-6 rounded-lg mb-6">
                <h3 class="font-bold mb-3">Claude Codeに質問する</h3>
                <p class="mb-4 text-sm">エラーメッセージをそのままコピーして、Claude Codeに質問しましょう。状況の情報が多いほど正確な回答が得られます。</p>
                <div class="bg-indigo-50 border border-indigo-200 p-4 rounded font-mono text-sm">
<pre>以下のエラーを修正してください：

[エラーメッセージをここに貼り付け]

発生状況：
- いつ発生するか（ページ表示時、ボタンクリック時など）
- 何をしたら発生したか（コードのどこを変更したか）
- 再現手順（毎回出るか、たまに出るか）</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p class="text-sm"><strong>ヒント：</strong>Claude Codeはターミナル上で動作するため、エラーが出た場所のファイルを自動的に読んで修正してくれます。Cursorの場合はエラーが出ているファイルを開いた状態でChat（Ctrl+L）に質問するとスムーズです。</p>
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
