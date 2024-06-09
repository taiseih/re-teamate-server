#!/bin/bash

# SASトークンを生成
SAS_TOKEN=$(az storage account generate-sas --permissions rwlacupd --account-name devstoreaccount1 --services b --resource-types sco --expiry 2043-12-31T23:59Z --connection-string "DefaultEndpointsProtocol=http;AccountName=devstoreaccount1;AccountKey=Eby8vdM02xNOcqFlqUwJPLlmEtlCDXJ1OUzFT50uSRZ6IFsuFq2UVErCz4I6tq/K1SZFPTOtr/KBHBeksoGMGw==;BlobEndpoint=http://azurite:10000/devstoreaccount1;" --output tsv)

# SASトークンをファイルに出力
echo $SAS_TOKEN > /shared/sas_token.txt
