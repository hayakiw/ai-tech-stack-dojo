<?php
$page_title = 'Docker基本操作 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'docker';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第2部：Docker入門';
$step_number = 6;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Docker基本操作</h1>

        <!-- イントロ -->
        <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
            <p class="text-lg">Dockerの基本コマンドを覚えて、コンテナを自在に操作できるようになりましょう。</p>
        </div>

        <!-- 基本コマンド一覧 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">よく使うコマンド一覧</h2>

            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-cyan-50">
                        <tr>
                            <th class="p-3 text-left">コマンド</th>
                            <th class="p-3 text-left">説明</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker pull</td>
                            <td class="p-3">イメージをダウンロード</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker run</td>
                            <td class="p-3">コンテナを作成して起動</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker ps</td>
                            <td class="p-3">実行中のコンテナ一覧</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker stop</td>
                            <td class="p-3">コンテナを停止</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker start</td>
                            <td class="p-3">停止したコンテナを起動</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker rm</td>
                            <td class="p-3">コンテナを削除</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker images</td>
                            <td class="p-3">イメージ一覧</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker rmi</td>
                            <td class="p-3">イメージを削除</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono text-cyan-700">docker logs</td>
                            <td class="p-3">コンテナのログを表示</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-mono text-cyan-700">docker exec</td>
                            <td class="p-3">コンテナ内でコマンド実行</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- docker run -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">docker run の詳細</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">基本構文</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
                    docker run [オプション] イメージ名 [コマンド]
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">主要オプション</h3>
                <div class="space-y-4">
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="font-mono text-cyan-700 font-bold">-d（デタッチモード）</p>
                        <p class="text-sm mt-1">バックグラウンドで実行</p>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker run -d nginx
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="font-mono text-cyan-700 font-bold">-p（ポート転送）</p>
                        <p class="text-sm mt-1">ホスト:コンテナのポートをマッピング</p>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker run -d -p 8080:80 nginx
                        </div>
                        <p class="text-xs text-gray-500 mt-1">→ localhost:8080でアクセス可能</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="font-mono text-cyan-700 font-bold">-v（ボリュームマウント）</p>
                        <p class="text-sm mt-1">ホストのディレクトリをコンテナにマウント</p>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker run -v ./myapp:/app python:3.11
                        </div>
                        <p class="text-xs text-gray-500 mt-1">→ ホストの./myappがコンテナの/appに</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="font-mono text-cyan-700 font-bold">-e（環境変数）</p>
                        <p class="text-sm mt-1">環境変数を設定</p>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker run -e MYSQL_ROOT_PASSWORD=secret mysql
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="font-mono text-cyan-700 font-bold">--name（コンテナ名）</p>
                        <p class="text-sm mt-1">コンテナに名前を付ける</p>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker run --name my-nginx -d nginx
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="font-mono text-cyan-700 font-bold">--rm（自動削除）</p>
                        <p class="text-sm mt-1">終了時に自動でコンテナを削除</p>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker run --rm python:3.11 python --version
                        </div>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="font-mono text-cyan-700 font-bold">-it（インタラクティブ）</p>
                        <p class="text-sm mt-1">対話モードでシェルに入る</p>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker run -it python:3.11 bash
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 実践例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">実践例</h2>

            <div class="space-y-6">
                <!-- Nginx -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-green-600">例1: Nginxを起動してブラウザでアクセス</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># Nginxコンテナをバックグラウンドで起動
docker run -d --name my-nginx -p 8080:80 nginx

# ブラウザで http://localhost:8080 にアクセス

# ログを確認
docker logs my-nginx

# 停止
docker stop my-nginx

# 削除
docker rm my-nginx</pre>
                    </div>
                </div>

                <!-- Python -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-600">例2: Pythonスクリプトを実行</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># カレントディレクトリをマウントしてPythonを実行
docker run --rm -v $(pwd):/app -w /app python:3.11 python script.py

# 対話モードでPythonシェルに入る
docker run -it --rm python:3.11 python</pre>
                    </div>
                </div>

                <!-- MySQL -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-orange-600">例3: MySQLを起動</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># MySQLコンテナを起動
docker run -d \
  --name my-mysql \
  -e MYSQL_ROOT_PASSWORD=secret \
  -e MYSQL_DATABASE=myapp \
  -p 3306:3306 \
  mysql:8.0

# MySQLに接続（コンテナ内で）
docker exec -it my-mysql mysql -uroot -psecret

# データを永続化する場合はボリュームを使用
docker run -d \
  --name my-mysql \
  -e MYSQL_ROOT_PASSWORD=secret \
  -v mysql-data:/var/lib/mysql \
  -p 3306:3306 \
  mysql:8.0</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- コンテナ管理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">コンテナ管理</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># 実行中のコンテナ一覧
docker ps

# すべてのコンテナ一覧（停止中も含む）
docker ps -a

# コンテナを停止
docker stop コンテナ名

# 停止したコンテナを起動
docker start コンテナ名

# コンテナを削除（停止している必要あり）
docker rm コンテナ名

# 強制削除（実行中でも削除）
docker rm -f コンテナ名

# すべての停止中コンテナを削除
docker container prune</pre>
                </div>
            </div>
        </section>

        <!-- イメージ管理 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">イメージ管理</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># イメージをダウンロード
docker pull python:3.11

# イメージ一覧
docker images

# イメージを削除
docker rmi python:3.11

# 未使用イメージを削除
docker image prune

# すべての未使用リソースを削除
docker system prune</pre>
                </div>
            </div>
        </section>

        <!-- コンテナ内の操作 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">コンテナ内の操作</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># 実行中のコンテナでコマンドを実行
docker exec コンテナ名 コマンド

# 例: ファイル一覧を表示
docker exec my-nginx ls /usr/share/nginx/html

# コンテナのシェルに入る
docker exec -it コンテナ名 bash

# または sh を使う（bashがないイメージの場合）
docker exec -it コンテナ名 sh

# コンテナのログを表示
docker logs コンテナ名

# ログをリアルタイムで追跡
docker logs -f コンテナ名</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">まとめ</h2>
            <div class="bg-cyan-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">docker run</code>でコンテナを作成・起動</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">-d</code>でバックグラウンド、<code class="bg-white px-1 rounded">-p</code>でポート転送</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">-v</code>でファイルを共有、<code class="bg-white px-1 rounded">-e</code>で環境変数設定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">docker exec</code>でコンテナ内のコマンド実行</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="docker-intro.php" class="flex items-center text-gray-600 hover:text-cyan-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Dockerとは
            </a>
            <a href="docker-compose.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700">
                次へ：Docker Compose
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
