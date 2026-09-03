# sobataiken.lp-web.net（そば打ち＆染物体験教室）— プロジェクト固有情報

## デプロイ先

| 項目 | 値 |
|---|---|
| **本番URL** | https://sobataiken.lp-web.net/ |
| **SSHホスト** | `cho2elite@cho2elite.xsrv.jp` |
| **SSHポート** | 10022 |
| **SSH鍵** | `~/.ssh/id_ed25519_xserver` |
| **本番パス** | `~/lp-web.net/public_html/sobataiken.lp-web.net/`（2026-09-03 ssh実機確認済） |
| **GitHub** | https://github.com/gennarikun/sobataiken.lp-web.net |
| **ローカルポート** | 8898（`php -S localhost:8898 -t .`・正本: agent_docs/ports-and-paths.md） |

### デプロイコマンド例（3層順: commit→push→rsync・ファイル明示列挙・--relative必須）

```bash
cd ~/Antigravity/hp/sobataiken.lp-web.net
rsync -av --relative -e "ssh -i ~/.ssh/id_ed25519_xserver -p 10022" \
  ./menu/index.php ./assets/<画像明示列挙> \
  cho2elite@cho2elite.xsrv.jp:~/lp-web.net/public_html/sobataiken.lp-web.net/
```

## サイト構成メモ

- PHPサイト（WP静的化・lightningテーマシェル）。共通: header.php / footer.php / css/style.css / js/script.js
- メニュー体系の正本 = houtoutaiken.lp-web.net（価格・コースは必ず正本から機械照合転記。rule30）
- dantai/ = houtoutaiken /launch/ のミラー（assets/dantai-page.css+js・画像 dantai_ prefix。更新時は本家launch変更に追随）
- 店頭すりだね販売価格の正本 = エアレジ商品マスタ（2026-09-03 実測: レギュラー50g各¥650）
- すりだね通販リンクは静的サイト `https://yoshidanoudon-suridane.net/shop.html`（旧WP URL /shop/ /about-suridane/ は廃止扱い・使わない。2026-09-03 オーナー指示）

## 一時変更（戻す可能性のあるもの）

- **photo-service（写真撮影サービス）非表示中**（2026-09-03〜・サービス一旦中止のため）
  - 実装: `photo-service/index.php` 先頭のPHPブロックで302→トップ / header.php・footer.php の導線を `PHOTOSERVICE-HIDDEN` コメントで無効化
  - **復活手順**: index.php 先頭のPHPブロック削除 + 2ファイルの PHOTOSERVICE-HIDDEN コメント解除（grep "PHOTOSERVICE-HIDDEN" で全該当が出る）

## 作業状態の正本

- `~/Antigravity/hp/_SOBATAIKEN_MENU_REDESIGN_2026-09.md`（2026-09 メニュー刷新・全ページ一掃の記録）
- `~/Antigravity/hp/_TASKS_takanasensei_2026-08.md`（グループ横断トラッカー）
