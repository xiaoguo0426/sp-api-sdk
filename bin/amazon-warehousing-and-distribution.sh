docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/12eeac8ae2dc49b839402aeb4a0b4960f793df93/models/amazon-warehousing-and-distribution-model/awd_2024-05-09.json \
    -c /sp-api/config/generator-product-types-definitions.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface