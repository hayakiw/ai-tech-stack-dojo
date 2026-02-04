<?php
$page_title = 'マイグレーション - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'mysql';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第3部：MySQL連携';
$step_number = 10;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">マイグレーション</h1>

        <!-- イントロ -->
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8">
            <p class="text-lg">マイグレーションは、データベースのスキーマ変更を管理する仕組み。Alembicを使って、テーブル構造の変更を安全に行います。</p>
        </div>

        <!-- なぜマイグレーションが必要か -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">なぜマイグレーションが必要か</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-red-50 p-6 rounded-lg">
                    <h3 class="font-bold text-red-700 mb-3">マイグレーションなしの問題</h3>
                    <ul class="space-y-2 text-sm text-red-600">
                        <li>✗ 本番DBを直接変更 → 履歴が残らない</li>
                        <li>✗ チームで変更が衝突</li>
                        <li>✗ 元に戻せない</li>
                        <li>✗ どのバージョンか分からない</li>
                    </ul>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="font-bold text-green-700 mb-3">マイグレーションのメリット</h3>
                    <ul class="space-y-2 text-sm text-green-600">
                        <li>○ 変更履歴がコードで残る</li>
                        <li>○ チームで共有できる</li>
                        <li>○ ロールバック（元に戻す）可能</li>
                        <li>○ 環境間で同じ構造を保証</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Alembicセットアップ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Alembicのセットアップ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">1. インストール</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
                    pip install alembic
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">2. 初期化</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># プロジェクトルートで実行
alembic init alembic

# 以下のファイル構造が生成される
# alembic/
# ├── versions/     # マイグレーションファイル
# ├── env.py        # 環境設定
# └── script.py.mako
# alembic.ini       # 設定ファイル</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">3. alembic.ini の設定</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># alembic.ini の該当行を変更
sqlalchemy.url = mysql+pymysql://myuser:mypassword@localhost:3306/myapp</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">4. env.py の設定</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># alembic/env.py
from logging.config import fileConfig
from sqlalchemy import engine_from_config, pool
from alembic import context

# 追加: モデルをインポート
import sys
sys.path.append('.')
from models import Base  # あなたのモデル

config = context.config
fileConfig(config.config_file_name)

# 追加: メタデータを設定
target_metadata = Base.metadata

def run_migrations_offline():
    # ... 既存コード

def run_migrations_online():
    # ... 既存コード</pre>
                </div>
            </div>
        </section>

        <!-- マイグレーションの作成と実行 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">マイグレーションの操作</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-blue-600">マイグレーション作成（自動生成）</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># モデルの変更を検出してマイグレーションを自動生成
alembic revision --autogenerate -m "create users and posts tables"

# alembic/versions/ に新しいファイルが作成される
# 例: 2024_01_15_1234_create_users_and_posts_tables.py</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-green-600">マイグレーション実行</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># 最新まで適用
alembic upgrade head

# 1つだけ進める
alembic upgrade +1

# 特定のリビジョンまで
alembic upgrade abc123</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-orange-600">ロールバック（元に戻す）</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># 1つ前に戻す
alembic downgrade -1

# 特定のリビジョンまで戻す
alembic downgrade abc123

# 全部戻す（注意！）
alembic downgrade base</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-purple-600">状態確認</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># 現在のリビジョン確認
alembic current

# マイグレーション履歴
alembic history

# 適用予定のマイグレーション
alembic heads</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- マイグレーションファイルの例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">マイグレーションファイルの例</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>"""create users and posts tables

Revision ID: abc123
Revises:
Create Date: 2024-01-15 10:30:00.000000
"""
from alembic import op
import sqlalchemy as sa

# revision identifiers
revision = 'abc123'
down_revision = None
branch_labels = None
depends_on = None


def upgrade():
    # usersテーブル作成
    op.create_table(
        'users',
        sa.Column('id', sa.Integer(), nullable=False),
        sa.Column('email', sa.String(255), nullable=False),
        sa.Column('name', sa.String(100), nullable=False),
        sa.Column('password_hash', sa.String(255), nullable=False),
        sa.Column('created_at', sa.DateTime(), server_default=sa.func.now()),
        sa.Column('updated_at', sa.DateTime(), server_default=sa.func.now()),
        sa.PrimaryKeyConstraint('id'),
        sa.UniqueConstraint('email')
    )
    op.create_index('ix_users_email', 'users', ['email'])

    # postsテーブル作成
    op.create_table(
        'posts',
        sa.Column('id', sa.Integer(), nullable=False),
        sa.Column('title', sa.String(255), nullable=False),
        sa.Column('content', sa.Text(), nullable=False),
        sa.Column('author_id', sa.Integer(), nullable=False),
        sa.Column('created_at', sa.DateTime(), server_default=sa.func.now()),
        sa.Column('updated_at', sa.DateTime(), server_default=sa.func.now()),
        sa.ForeignKeyConstraint(['author_id'], ['users.id'], ondelete='CASCADE'),
        sa.PrimaryKeyConstraint('id')
    )
    op.create_index('ix_posts_author_id', 'posts', ['author_id'])


def downgrade():
    op.drop_table('posts')
    op.drop_table('users')</pre>
                </div>
            </div>
        </section>

        <!-- よく使う操作 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">よく使う操作</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># カラム追加
def upgrade():
    op.add_column('posts', sa.Column('published', sa.Boolean(), default=False))

def downgrade():
    op.drop_column('posts', 'published')


# カラム名変更
def upgrade():
    op.alter_column('users', 'name', new_column_name='display_name')

def downgrade():
    op.alter_column('users', 'display_name', new_column_name='name')


# インデックス追加
def upgrade():
    op.create_index('ix_posts_created_at', 'posts', ['created_at'])

def downgrade():
    op.drop_index('ix_posts_created_at', 'posts')</pre>
                </div>
            </div>
        </section>

        <!-- Docker環境での実行 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Docker環境での実行</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># コンテナ内でマイグレーション実行
docker compose exec backend alembic upgrade head

# 開発時のワークフロー
# 1. モデルを変更
# 2. マイグレーション生成
docker compose exec backend alembic revision --autogenerate -m "add published column"

# 3. 生成されたファイルを確認・編集

# 4. マイグレーション実行
docker compose exec backend alembic upgrade head</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">まとめ</h2>
            <div class="bg-green-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span>Alembicでスキーマ変更を管理</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">--autogenerate</code>で自動生成、手動確認も忘れずに</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">upgrade head</code>で適用、<code class="bg-white px-1 rounded">downgrade -1</code>で戻す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-600 mr-2">✓</span>
                        <span>マイグレーションファイルはGitで管理</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="fastapi-mysql.php" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                FastAPI + MySQL
            </a>
            <a href="auth-basics.php" class="flex items-center bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                次へ：認証の基礎
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
