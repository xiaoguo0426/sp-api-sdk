docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/catalog-items-api-model/catalogItems_2022-04-01.json \
    --skip-validate-spec \
    -c /sp-api/config/generator-catalog-item.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface