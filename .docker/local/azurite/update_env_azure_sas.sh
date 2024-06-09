#!/bin/bash
# 生成されたSASトークンファイルのパス
SAS_TOKEN_FILE="storage/azure-cli/sas_token.txt"

# Laravelの.envファイルのパス
LARAVEL_ENV_FILE=".env"

# ファイルの存在チェック
if [ -f "$SAS_TOKEN_FILE" ]; then
    echo "SAS Token file exists."
else
    echo "SAS Token file does not exist."
fi

if [ -f "$LARAVEL_ENV_FILE" ]; then
    echo ".env file exists."
else
    echo ".env file does not exist."
fi

# .envファイルを一時ディレクトリにコピー
cp $LARAVEL_ENV_FILE /tmp/.env

# SASトークンがファイルに存在する場合にのみ実行
if [ -f "$SAS_TOKEN_FILE" ]; then
    SAS_TOKEN=$(cat $SAS_TOKEN_FILE | sed 's|&|\\&|g')
    sed -i "s|AZURE_ACCOUNT_SAS_TOKEN=.*|AZURE_ACCOUNT_SAS_TOKEN=$SAS_TOKEN|g" /tmp/.env
    # 一時ディレクトリから元の場所にコピー
    cp -f /tmp/.env $LARAVEL_ENV_FILE
fi
